<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages;
use App\Traits\Users;
use App\Http\Requests\WebRegister;

class RegisterController extends Controller
{
    public function index(){
        try {
            return view('frontend.registerpage.register');
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function store(Request $request){
        try {
            if ($request->method() == 'POST') {
                if ($v = Users::validateUserRegister($request))
                {$v = validatorMessages($v, ['mClass' => 'error']);
                    Session::flash('warning', 'Oops! action could not complete!');
                }
                else {
                    $v = Validator::make([], []);
                    $obj = Users::createOrUpdateOrDeleteUserRegister($request);
                    Session::flash('success', 'Record created successfully!');
                    if (!$obj->web_user_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                    return redirect(route('user-login'))->withErrors($v)->withInput();
                }
                return redirect(route('user-register'))->withErrors($v)->withInput();
            }
        } catch (\Exception $e) {
             return view('frontend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


}
