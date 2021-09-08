<?php

namespace App\Traits;

use App\Models\WebUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\UserRegister as UReg;
use File, Illuminate\Validation\Rule;
use App\Constants\API\Constant, App\Constants\API\Messages;
use Illuminate\Testing\Fluent\Concerns\Has;


trait Registers
{
    public static function  validateUserRegister($request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required|max:30|unique:user_registration,username',
            'email' => 'required|max:50|email|unique:user_registration,u_email',
            'password' => 'required|max:100|required_with:confirm_password',
            'confirm_password' => 'required|max:100|same:password',
        ]);
        if($validator->fails())
            return $validator;
        return false;
    }

    public static function createOrUpdateOrDeleteUser($request)
    {
        if ($request->user_id && $request->user_id != '' && is_api() == false) $obj = UReg::find(decrypt($request->user_id));
        else $obj = new UReg();
        if ($request->username) $obj->username = $request->username;
        if ($request->email) $obj->u_email = $request->email;
        if ($request->password) $obj->u_password = bcrypt($request->password);
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        $obj->save();
        return $obj;
    }

    public static function validateUserLogin($request)
    {
        $validator =Validator::make($request->all(),[
            'username' => 'required|max:30',
            'password' => 'required|max:100'
        ]);
        if($validator->fails())
            return $validator;
        return false;
    }

    public static function doUserLogin($request){
        $user = UReg::where('username','=',$request->username)->first();
//        dd($user);
        if(isset($user) && Hash::check($request->password,$user->u_password) == false)
            return;
        return $user;
    }

    public static function setSession($user)
    {
        $user_info = [
            "user_id" => $user->user_id,"username" => $user->username,
            "user_email" => $user->u_email, "is_active" => $user->is_active
        ];
        session()->put('user_data',['user_info' => $user_info]);
    }


     public static function setWebSession($user)
    {
        $user_info = [
            "web_user_id" => $user->web_user_id,"username" => $user->first_name, "lastname" => $user->last_name,
            "user_web_email" => $user->email, "is_active" => $user->is_active , "gender" => $user->gender
        ];
        session()->put('user_web_data',['user_info' => $user_info]);
    }

    public static function webUserSuspend($request) {
      $users =   WebUsers::find($request);
      if (!empty($users))
      {
          if ($users->is_active == 1 ){
              $users->update(['is_active'=> '0']);
          }else{
              $users->update(['is_active'=> '1']);
          }
      }

        return $users;
    }
}
