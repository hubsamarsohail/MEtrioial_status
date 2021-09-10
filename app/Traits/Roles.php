<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\Roles as R, App\Traits\Menus as M;
use phpDocumentor\Reflection\Types\True_;


trait Roles
{

    public static function validateRole($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25|unique:roles,name' . ($request->role_id && $request->role_id != '' ? ',' . decrypt($request->role_id) . ',role_id' : ''),
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getRoles($request, $single = false)
    {

        $roles = R::where(function ($q) use ($request, $single) {
            if ($request->is_active) $q->where('is_active', '=', $request->is_active);
            if ($request->role_id && $single == true) $q->where('role_id', '=', decrypt($request->role_id));
        })->get();
        if ($single == true && isset($roles[0])) return $roles[0];
        return $roles;
    }

    public static function createOrUpdateOrDeleteRole($request)
    {
        if ($request->role_id && $request->role_id != '') $obj = R::find(decrypt($request->role_id));
        else $obj = new R();
        if ($request->name) $obj->name = $request->name;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        if ($request->action == 'delete') {
            $obj->delete();
            return true;
        }
        $obj->save();
        return $obj;
    }

}
