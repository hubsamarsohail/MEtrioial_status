<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Registers, App\Constants\Messages as Msg, App\Constants\API\ErrorCodes as EC;

use Illuminate\Support\Facades\Validator;
use \Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        try{
            if ($request->method() == 'POST') {
                if ($validator = Registers::validateUserRegister($request)){
                    $validator = validatorMessages($validator, ['mClass' => 'error']);
                }
                else {
                    $validator = Validator::make([], []);
                    $obj = Registers::createOrUpdateOrDeleteUser($request);
                    if (!$obj->user_id){
                        $validator = validatorMessages($validator, ['mClass' => 'error','msg' => Msg::rec_error]);
                    }
                    else {
                        $validator = validatorMessages($validator, ['mClass' => 'success', 'msg' => 'User register successfully']);
                    }
                }
                return Redirect::back()->withErrors($validator)->withInput();
            }
            return view('frontend.landingpage.landingPage');
        }catch(Exception $e){
            return view('frontend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function login(Request $request){
        try{
        if ($request->method() == 'POST') {
            if($validator = Registers::validateUserLogin($request)){
                $validator->errors()->add('mClass', 'error');
                return redirect()->back()->withErrors($validator)->withInput();
            }
            else {
                $user = Registers::doUserLogin($request);
                if($user == null){
                    $v = Validator::make([],[]);
                    $v->errors()->add('mClass','error')->add('invalid',Msg::invalid_user_pass);
//                    dd($v->errors());
                    return redirect()->back()->withErrors($v)->withInput();
                }
                Registers::setSession($user);
//                dd('hhh',$request->session()->get('user_data'));
                return redirect(route('userProfile'));
            }
        }
        return view('frontend.landingpage.landingPage');
        }
        catch (Exception $e){
            return view('frontend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function profile(Request $request)
    {
        try {
            return view('frontend.profile.profileMain');
        } catch (\Exception $e) {
            return view('frontend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
