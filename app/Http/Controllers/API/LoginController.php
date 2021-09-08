<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WebUsers;
use App\Traits\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = WebUsers::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {

                if (!empty($request->device_token))
                {
                    $user->update(['device_token'=> $request->device_token]);

                }else{
                    $response = ["message" => "Please Send Device Token of firebase"];
                    return response($response, 422);
                }
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token, 'user'=>$user];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }

    }
}
