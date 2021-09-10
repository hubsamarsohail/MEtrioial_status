<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\Tenants as T;
use File;
use App\Constants\Constant, App\Constants\Messages;


trait Tenants
{

    public static function validateTenant($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|unique:tenants,name' . ($request->tenant_id && $request->tenant_id != '' ? ',' . decrypt($request->tenant_id) . ',tenant_id' : ''),
            'email' => 'required|max:50|email|unique:tenants,email' . ($request->tenant_id && $request->tenant_id != '' ? ',' . decrypt($request->tenant_id) . ',tenant_id' : ''),
            'phone' => 'required|max:20',
            'address' => 'sometimes|required|max:75',
            'attachments.*' => 'sometimes|required|mimes:' . implode(',', Constant::allowedImgExts) . '|max:2048',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getTenants($request, $all = false, $single = false)
    {
        $tenants = T::where(function ($q) use ($request) {
            if ($request->is_active) $q->where('is_active', '=', $request->is_active);
            if ($request->tenant_id) $q->where('tenant_id', '=', decrypt($request->tenant_id));
            if ($request->s && $request->s != '') {
                $q->where(function ($query) use ($request) {
                    $query->orWhere('name', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('email', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('phone', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('address', 'LIKE', '%' . $request->s . '%');
                });
            }
        });
        if($all) $tenants = $tenants->get();
        else if($single) $tenants = $tenants->first();
        else $tenants = $tenants->paginate((isset($request->per_page) ? $request->per_page : 10));
        return $tenants;
    }

    public static function createOrUpdateOrDeleteTenant($request)
    {
        if ($request->tenant_id && $request->tenant_id != '') $obj = T::find(decrypt($request->tenant_id));
        else $obj = new T();
        if ($request->name) $obj->name = $request->name;
        if ($request->email) $obj->email = $request->email;
        if ($request->phone) $obj->phone = $request->phone;
        if ($request->address) $obj->address = $request->address;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        if ($request->action == 'delete') {
            if (isset($obj->logo) && $obj->logo != '') {
                File::delete(publicPath('/uploads/tenants/' . $obj->tenant_id . '/' . $obj->logo));
                File::deleteDirectory(publicPath('/uploads/tenants/' . $obj->tenant_id));
            }
            return $obj->delete();
        }
        $obj->save();
        if (isset($request->attachments) && count($request->attachments) > 0) {
            $dir = publicPath('/uploads/tenants/' . $obj->tenant_id);
            if (isset($obj->logo) && $obj->logo != '') File::delete($dir . '/' . $obj->logo);
            $obj->logo = moveAttachments($request, $dir)[0];
            $obj->save();
        }
        return $obj;
    }

}