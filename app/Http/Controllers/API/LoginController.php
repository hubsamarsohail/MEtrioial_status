<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WebUsers;
use App\Traits\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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


//        $request->validate([
//            'email' => 'required|string|email',
//            'password' => 'required|string',
//        ]);
//        $credentials = request(['email', 'password']);
//        if(!Auth::attempt($credentials))
//            return response()->json([
//                'message' => 'Unauthorized'
//            ], 401);
//            $user = $request->user();
//            $tokenResult = $user->createToken('Personal Access Token');
//            $token = $tokenResult->token;
//            if ($request->remember_me)
//            $token->expires_at = Carbon::now()->addWeeks(1);
//            $token->save();
//
//            return response()->json([
//            'access_token' => $tokenResult->accessToken,
//            'token_type' => 'Bearer',
//            'expires_at' => Carbon::parse(
//                $tokenResult->token->expires_at
//            )->toDateTimeString()
//        ]);

    }
}
