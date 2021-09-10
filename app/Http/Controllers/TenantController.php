<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Tenants;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages;

class TenantController extends Controller
{
    public function create(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Tenants::validateTenant($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Tenants::createOrUpdateOrDeleteTenant($request);
                    if (!$obj->tenant_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('aTenantC'))->withErrors($v)->withInput();
            }
            return view('backend.tenants.create');
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }

    }

    public function view(Request $request)
    {
        try {
            $tenants = Tenants::getTenants($request);
            return view('backend.tenants.view', compact('tenants'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Tenants::validateTenant($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Tenants::createOrUpdateOrDeleteTenant($request);
                    if (!$obj->tenant_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                }
                return redirect(route('aTenantU', ['tenant_id' => $request->tenant_id]))->withErrors($v)->withInput();
            }
            $tenant = Tenants::getTenants($request, true);
            return view('backend.tenants.edit', compact('tenant'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {
        try {
            $v = Validator::make([], []);
            $role = Tenants::createOrUpdateOrDeleteTenant($request);
            if ($role != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
            return redirect(route('aTenantV'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

}
