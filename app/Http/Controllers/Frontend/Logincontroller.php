<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Users, App\Traits\RoleMenus;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages;
use App\Traits\Registers;
use App\Models\Profile as UProfile;

class Logincontroller extends Controller
{
    public function index(){
        try {

            return view('frontend.loginpage.login');
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function create(Request $request){

        try {

            if ($request->method() == 'POST') {
                if ($validator = Users::validateUserLogin($request)) {
                    Session::flash('warning', 'Oops! action could not complete!');
                    $validator->errors()->add('mClass', 'error');
                    return redirect()->back()->withErrors($validator)->withInput();

                } else {

                    $user = Users::UsLogin($request);
                    if (!empty($request->device_token)){
                        if (isset($user)) $user->update(['device_token'=> $request->device_token]);

                    }else{
                        $v = Validator::make([], []);
                        $v->errors()->add('mClass', 'error')
                            ->add('invalid', Messages::invalid_user_pass);
                        Session::flash('warning', 'Oops! action could not complete! Please try Again!');
                        return redirect()->back()->withErrors($v)->withInput();
                    }

                    if (isset($user)) {
                        if ($user->is_active == '1'){

                        }else{
                            $v = Validator::make([], []);
                            $v->errors()->add('mClass', 'error')
                                ->add('invalid', Messages::invalid_user_pass);
                            Session::flash('warning', 'Account temporary suspended!');
                            return redirect()->back()->withErrors($v)->withInput();
                        }
                    }
                    if ($user == null) {
                        $v = Validator::make([], []);
                        $v->errors()->add('mClass', 'error')
                            ->add('invalid', Messages::invalid_user_pass);
                        Session::flash('warning', 'Invalid Username/Password!');
                        return redirect()->back()->withErrors($v)->withInput();
                    }
                     Registers::setWebSession($user);

                    $web_user_id =      session()->get('user_web_data')['user_info']['web_user_id'];

                    if (!empty($web_user_id))
                    {
                        $user_profile_data = UProfile::where('web_user_id', $web_user_id)->first();
                        if (!empty($user_profile_data)){
                            return redirect(route('uProfileDetail'));
                        }
                    }

                    return redirect(route('userProfile'));
                }
            }
            return view('frontend.loginpage.login');

        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
        }
    }
    public function logout(Request $request)
    {
        try {
            session()->put('user_web_data', null);
            return redirect(route('getCMS'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }



}
