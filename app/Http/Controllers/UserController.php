<?php

namespace App\Http\Controllers;

use App\Constants\Constant;
use App\Notifications\NewUserGreeting;
use App\Traits\Roles;
use App\Traits\Tenants;
use Illuminate\Http\Request;
use App\Traits\Users, App\Traits\RoleMenus;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages;
use App\Models\Users as user;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $user = user::where('username' , $request->username)->first();

//        Notification::send($user, new NewUserGreeting('Notification!'));
        $this->send_firebase_order_notification('f2rUjBvFbq4:APA91bGztKDGbFWM1yygP7W9gc8WkHCOyWDZOX4OBS8piMkw8LWPoBEHnUKFGmpF9cpQNsxqereRC_U8mG3-jX8CupNo92hVaCEwekrBoBEe-SLURLDF5wiPiARmKWJw77cpfKe6Pxlg' , "HNotification!");


        try {
            if ($request->method() == 'POST') {
                if ($validator = Users::validateLogin($request)) {
                    $validator->errors()->add('mClass', 'error');
                    return redirect()->back()->withErrors($validator)->withInput();

                } else {
                    $user = Users::doLogin($request);
                    if ($user == null) {
                        $v = Validator::make([], []);
                        $v->errors()->add('mClass', 'error')
                            ->add('invalid', Messages::invalid_user_pass);
                        return redirect()->back()->withErrors($v)->withInput();
                    }
                    $user_menus = RoleMenus::getUserRolesMenus($request, $user);
                   $user =    Users::setSession($user, $user_menus);

                    return redirect(route('aDashboard'));
                }
            }
            return view('backend.login');
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
        }

    }

    public function  dashboard(Request $request)
    {
        try {
            return view('backend.dashboard.dashboard');
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {
        try {
            session()->put('b_user_data', null);
            return redirect(route('aDashboard'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Users::validateUser($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Users::createOrUpdateOrDeleteUser($request);
                    if (!$obj->user_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('aUserC'))->withErrors($v)->withInput();
            }
            $roles = Roles::getRoles($request);
            $tenants = Tenants::getTenants($request, true);
            return view('backend.users.create', compact('roles', 'tenants'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }

    }

    public function view(Request $request)
    {
        try {
            $records = Users::getUsers($request);
            $roles = Roles::getRoles($request);
            $tenants = Tenants::getTenants($request, true);
            $isActive = Constant::isActive;
            $perPage = Constant::perPage;
            return view('backend.users.view', compact('records', 'request', 'tenants', 'roles', 'isActive', 'perPage'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Users::validateUser($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Users::createOrUpdateOrDeleteUser($request);
                    if (!$obj->user_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                }
                return redirect(route('aUserU', ['user_id' => $request->user_id]))->withErrors($v)->withInput();
            }
            $record = Users::getUsers($request, false, true);
            $roles = Roles::getRoles($request);
            $tenants = Tenants::getTenants($request, true);
            $isActive = Constant::isActive;
            return view('backend.users.edit', compact('roles', 'tenants', 'record', 'isActive', 'request'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {
        try {
            $v = Validator::make([], []);
            $role = Users::createOrUpdateOrDeleteUser($request);
            if ($role != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
            return redirect(route('aUserV'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function accessDenied(Request $request) {

        return view('backend.errors.error', ['code' => 403, 'message' => 'Access denied']);
    }

}
