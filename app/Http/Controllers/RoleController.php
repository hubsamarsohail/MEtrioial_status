<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Traits\RoleMenus;
use Illuminate\Http\Request;
use App\Traits\Roles, App\Traits\Menus;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserGreeting;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages, App\Constants\Constant;

class RoleController extends Controller
{
    public function create(Request $request)
    {

        $user =  Users::find(session()->get('b_user_data')['user_info']['user_id']);
         Notification::send($user, new NewUserGreeting('Hello testing!'));
        $this->send_firebase_order_notification('fMAhfeTGnD4:APA91bFlH3eOSlCV7998Dok3uqM76GNccYiw75rKphloUAmLd6eyxuG0-qk1O-UprXPfu3Dubi-9dAgTLRAbIVAw7epoBphZXvTplLhwMnA0xRfNKWKLp-8VO9bnnsUM8dK1SnsSE4ht', 'Hello, This is role create!');
        try {
            if ($request->method() == 'POST') {
                if ($v = Roles::validateRole($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $role = Roles::createOrUpdateOrDeleteRole($request);
                    if (!$role->role_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('aRoleC'))->withErrors($v)->withInput();
            }
            return view('backend.roles.create');
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }

    }

    public function view(Request $request)
    {
        $this->send_firebase_order_notification('fMAhfeTGnD4:APA91bFlH3eOSlCV7998Dok3uqM76GNccYiw75rKphloUAmLd6eyxuG0-qk1O-UprXPfu3Dubi-9dAgTLRAbIVAw7epoBphZXvTplLhwMnA0xRfNKWKLp-8VO9bnnsUM8dK1SnsSE4ht', 'Hello, This is complaint type!');
        try {

            $roles = Roles::getRoles($request);
            return view('backend.roles.view', compact('roles'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Roles::validateRole($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $role = Roles::createOrUpdateOrDeleteRole($request);
                    if (!$role->role_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                }
                return redirect(route('aRoleU', ['role_id' => $request->role_id]))->withErrors($v)->withInput();
            }
            $role = Roles::getRoles($request, true);
            return view('backend.roles.edit', compact('role'));
        } catch (\Exception $e) {
            abort($e->getCode(), $e->getMessage());
        }
    }

    public function delete(Request $request)
    {
        try {
            $v = Validator::make([], []);
            $role = Roles::createOrUpdateOrDeleteRole($request);
            if ($role != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
            return redirect(route('aRoleV'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function viewRoleMenus(Request $request)
    {
        try {

            $role_menus = RoleMenus::getRoleMenus($request);
            $roles = Roles::getRoles($request);
            $displayInMenus = Constant::displayInMenus;
            $isActive = Constant::isActive;
            $perPage = Constant::perPage;
            return view('backend.role_menus.view', compact('role_menus', 'displayInMenus', 'request', 'isActive', 'perPage', 'roles'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function assignRoleMenus(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = RoleMenus::validateRoleMenus($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = RoleMenus::createOrUpdateOrDeleteRoleMenus($request);
                    if (!$obj) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                }
                return redirect(route('aRoleMenusCU', ['role_id' => $request->role_id]))->withErrors($v)->withInput();
            }
            $roles = Roles::getRoles($request);
            $menus = Menus::getMenus($request, false, true);
            if(isset($request->role_id)) $request->request->add(['r_id' => decrypt($request->role_id)]);
            $role_menus = RoleMenus::getRoleMenus($request, true)->toArray();
            return view('backend.role_menus.create_update', compact('menus', 'role_menus', 'request', 'roles'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

}
