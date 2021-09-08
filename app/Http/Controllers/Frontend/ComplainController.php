<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Complain;
use App\Constants\Messages;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ComplainController extends Controller
{
    public function  create(Request $request){
        try {
            if ($request->method() == 'POST') {
                if ($v = Complain::validateComplain($request))
                {$v = validatorMessages($v, ['mClass' => 'error']);
                    Session::flash('success', 'Oops! action could not complete!');
                }
                else {
                    $v = Validator::make([], []);
                    $complainType = Complain::createOrUpdateOrDeleteRole($request);
                    Session::flash('success', 'Record Added!');
                    if (!$complainType->complain_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('uProfileDetail'))->withErrors($v)->withInput();
            }
            return view('Frontend.profile.index');
        } catch (\Exception $e) {
            return view('Frontend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
