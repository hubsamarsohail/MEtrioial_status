<?php

namespace App\Traits;

use App\Models\WebUsers;
use Illuminate\Support\Facades\Validator;
use App\Models\Complain as Com;
use phpDocumentor\Reflection\Types\True_;
use function React\Promise\all;


trait Complain
{

    public static function validateComplain($request)
    {
        $validator = Validator::make($request->all(), [
            'complain_type_id' => 'required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function createOrUpdateOrDeleteRole($request){
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
            $requestdata['complain_type_id'] = $request->complain_type_id;
            $requestdata['user_profile_id']     = $request->to_user_id;
            $requestdata['from_user_id']     = $web_user_id;
            $requestdata['description'] = $request->description;
            $obj =   Com::create($requestdata);
        return $obj;

    }
    public static function UserReport($request, $single = false, $parent = false, $all = false){
      $web_users = Com::with('to_users' , 'from_user', 'complain_type')
          ->whereHas('complain_type', function ($query) use ($request) {
              if (!empty($request->complain_tye_id)) $query->where('complain_tye_id', $request->complain_tye_id);
          })->where(function ($query) use ($request) {
              if ($request->description && $request->description != '') {
                  if ($request->description) $query->orWhere('description','LIKE', '%' . $request->description . '%');
              }
          })->get();
        foreach ($web_users as $users )
       $users->web_user =   WebUsers::find($users->to_users->web_user_id);
        return $web_users;
    }



}
