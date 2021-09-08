<?php

namespace App\Http\Controllers;

use App\Traits\ComplainType;
use Illuminate\Http\Request;
use App\Constants\Messages;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Type;

class ComplainTypeController extends Controller
{
    public function create(Request $request){
        try {
            if ($request->method() == 'POST') {

                if ($v = ComplainType::validateComplainType($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $complainType = ComplainType::createOrUpdateOrDeleteRole($request);
                    if (!$complainType->complain_tye_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('acomplain.type'))->withErrors($v)->withInput();
            }
            return view('backend.complain_type.create');
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function view(Request $request)
    {
        try {
            $complainsTypes = ComplainType::getCompalinTypes($request);
            return view('backend.complain_type.view', compact('complainsTypes'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function update(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = ComplainType::validateComplainType($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $complainType = ComplainType::createOrUpdateOrDeleteRole($request);
                    if (!$complainType->complain_tye_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                }
                return redirect(route('acomplain.typeu', ['complain_tye_id' => $request->complain_tye_id]))->withErrors($v)->withInput();
            }
            $complainsTypes = ComplainType::getCompalinTypeEdit($request);
             return view('backend.complain_type.edit', compact('complainsTypes'));
        } catch (\Exception $e) {
            abort($e->getCode(), $e->getMessage());
        }
    }

    public function delete(Request $request)
    {
        try {
            $v = Validator::make([], []);
            $complainType = ComplainType::createOrUpdateOrDeleteRole($request);
            if ($complainType != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
            return redirect(route('acomplain.typev'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
