<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\Users as U, App\Models\UsersRoles as UR, App\Models\TenantUsers as TU, App\Models\WebUsers as WB;
use Illuminate\Support\Facades\Hash;
use App\Constants\Constant, File;


trait Users
{

    public static function validateLogin($request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:30',
            'password' => 'required|max:20',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }


    public static function validateUserLogin($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:30',
            'password' => 'required|max:20',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function validateUserRegister($request)
    {
        $validator = Validator::make($request->all(), [

            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|max:50|email|unique:web_users,email',
            'password' =>  'required|max:100|required_with:confirm_password',
            'confirm_password' =>  'max:100|same:password',
            'gender' => 'required|max:10',
           ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function validateUser($request)
    {
        $validator = Validator::make($request->all(), [
            'tenant_ids' => 'required|array',
            'tenant_ids.*' => 'required|digits_between:1,20',
            'role_ids' => 'required|array',
            'role_ids.*' => 'required|digits_between:1,20',
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'username' => (is_api() == false ? 'sometimes|' : '') . 'required|max:30|unique:users,username' . ($request->user_id && $request->user_id != '' ? ',' . decrypt($request->user_id) . ',user_id' : ''),
            'email' => (is_api() == false ? 'sometimes|' : '') . 'required|max:50|email|unique:users,email' . ($request->user_id && $request->user_id != '' ? ',' . decrypt($request->user_id) . ',user_id' : ''),
            'password' => (is_api() == false ? 'sometimes|' : '') . 'required|max:100|required_with:confirm_password',
            'confirm_password' => (is_api() == false ? 'sometimes|' : '') . 'max:100|same:password',
            'mobile' => 'required|max:20',
            'address' => 'required',
            'attachments.*' => 'sometimes|required|mimes:' . implode(',', Constant::allowedImgExts) . '|max:2048',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function validateApiUser($request)
    {
        $validator = Validator::make($request->all(), [
            'tenant_ids' => 'required|array',
            'tenant_ids.*' => 'required|digits_between:1,20',
            'role_ids' => 'required|array',
            'role_ids.*' => 'required|digits_between:1,20',
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'username' => 'required|max:30|unique:users,username',
            'email' => 'required|max:50|email|unique:users,email',
            'password' => 'required|max:100|required_with:confirm_password',
            'confirm_password' => 'required|max:100|same:password',
            'mobile' => 'required|max:20',
            'address' => 'required',
            'attachments.*' => 'sometimes|required|mimes:' . implode(',', Constant::allowedImgExts) . '|max:2048',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }


    public static function UsLogin($request)
    {

        $user = WB::where([
            ['email', '=', $request->email ],
        ])->first();



        if (isset($user) && Hash::check($request->password, $user->password) == false) // Not match
            return;
        return $user;
    }

    public static function doLogin($request)
    {
        $user = U::with('UserRoles.Role', 'TenantUsers.Tenant')->where([
            ['username', '=', $request->username],
        ])->first();
        if (isset($user) && Hash::check($request->password, $user->password) == false) // Not match
            return;
        return $user;
    }

    public static function setSession($user, $user_menus)
    {
        $user_roles = $user_tenants = [];
        $user_info = [
            "user_id" => $user->user_id, "first_name" => $user->first_name, "last_name" => $user->last_name,
            "username" => $user->username, "email" => $user->email, "mobile" => $user->mobile,
            "address" => $user->address, "img" => $user->img
        ];
        foreach ($user['UserRoles'] as $ur) {
            $user_roles[] = ['role_id' => $ur['Role']->role_id, 'name' => $ur['Role']->name];
        }
        foreach ($user['TenantUsers'] as $tenantUser) {
            $tenant = $tenantUser['Tenant'];
            $user_tenants[] = ['tenant_id' => $tenant->tenant_id, 'name' => $tenant->name];
        }
        session()->put('b_user_data', ['user_info' => $user_info, 'user_roles' => $user_roles, 'user_tenants' => $user_tenants, 'user_menus' => $user_menus, 'allowed_routes' => $GLOBALS['allowed_routes']]);
    }

    public static function getUsers($request, $all = false, $single = false)
    {
        $records = U::with(['UserRoles.Role', 'TenantUsers.Tenant'])
            ->whereHas('UserRoles', function ($query) use ($request) {
                if (isset($request->role_ids) && count($request->role_ids) > 0) $query->whereIn('role_id', $request->role_ids);
            })
            ->whereHas('TenantUsers', function ($query) use ($request) {
                if (isset($request->tenant_ids) && count($request->tenant_ids) > 0) $query->whereIn('tenant_id', $request->tenant_ids);
            })
            ->where(function ($query) use ($request) {
                if ($request->is_active != '') $query->where('is_active', '=', $request->is_active);
                if ($request->user_id != '') $query->where('user_id', '=', decrypt($request->user_id));
                if ($request->s && $request->s != '')
                {
                    $query->orWhere('first_name', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('last_name', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('username', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('email', 'LIKE', '%' . $request->s . '%');
                }
            });

        if ($all) $records = $records->get();
        else if ($single) $records = $records->first();
        else $records = $records->paginate((isset($request->per_page) ? $request->per_page : 10));
        return $records;
    }

    public static function createOrUpdateOrDeleteUser($request)
    {
        if ($request->user_id && $request->user_id != '' && is_api() == false) $obj = U::find(decrypt($request->user_id));
        else $obj = new U();
        if ($request->first_name) $obj->first_name = $request->first_name;
        if ($request->last_name) $obj->last_name = $request->last_name;
        if ($request->username) $obj->username = $request->username;
        if ($request->email) $obj->email = $request->email;
        if ($request->mobile) $obj->mobile = $request->mobile;
        if ($request->password) $obj->password = bcrypt($request->password);
        if ($request->address) $obj->address = $request->address;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        if ($request->action == 'delete') {
            if (isset($obj->img) && $obj->img != '') {
                File::delete(publicPath('/uploads/users/' . $obj->user_id . '/' . $obj->img));
                File::deleteDirectory(publicPath('/uploads/users/' . $obj->user_id));
            }
            return $obj->delete();
        }
        $obj->save();
        if (isset($request->role_ids) && count($request->role_ids)) {
            UR::where('user_id', '=', $obj->user_id)->delete();
            foreach ($request->role_ids as $role_id) {
                $ur = new UR();
                $ur->user_id = $obj->user_id;
                $ur->role_id = $role_id;
                $ur->save();
            }

        }
        if (isset($request->tenant_ids) && count($request->tenant_ids)) {
            TU::where('user_id', '=', $obj->user_id)->delete();
            foreach ($request->tenant_ids as $tenant_id) {
                $tu = new TU();
                $tu->user_id = $obj->user_id;
                $tu->tenant_id = $tenant_id;
                $tu->save();
            }
        }

        if (isset($request->attachments) && count($request->attachments) > 0) {
            $dir = publicPath('/uploads/users/' . $obj->user_id);
            if (isset($obj->img) && $obj->img != '') File::delete($dir . '/' . $obj->img);
            $obj->img = moveAttachments($request, $dir)[0];
            $obj->save();
        }
        return $obj;
    }

    public static function ApiPrepareUserData($User) {
        $data = [
            'user_id' => encrypt($User->user_id),
            'created_by' => $User->user_id,
            'tenant_ids' => [$User->TenantUsers[0]->tenant_id],
            'tenant_id' => $User->TenantUsers[0]->tenant_id,
            'role_ids' => [$User->UserRoles[0]->user_id],
            'role_id' => $User->UserRoles[0]->user_id,
        ];
        return $data;
    }



    public static function createOrUpdateOrDeleteUserRegister($request)
    {

        if ($request->web_user_id && $request->web_user_id != '' && is_api() == false) $obj = WB::find(decrypt($request->web_user_id));
        else $obj = new WB();
        if ($request->first_name) $obj->first_name = $request->first_name;
        if ($request->last_name) $obj->last_name = $request->last_name;
        if ($request->email) $obj->email = $request->email;
        if ($request->password) $obj->password = Hash::make($request->password);
        if ($request->gender) $obj->gender = $request->gender;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        $obj->save();
        
        return $obj;
    }



}
