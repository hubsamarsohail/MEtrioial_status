<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Complain_type;
use App\Models\WebUsers;
use App\Traits\Complain;
use App\Traits\Profile;
use App\Traits\Registers as WU;
use Illuminate\Http\Request;
use Hashids;
use Illuminate\Support\Facades\Validator;

class ComplainController extends Controller
{
    public function view(Request $request){
        try {
            $complain_types = Complain_type::get();
           $userReposts  =  Complain::UserReport($request);
           return view('backend.complains.view', compact('userReposts' , 'complain_types', 'request'));
    } catch (\Exception $e) {
return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
}
    }

    public function edit($Id){
        try {
            $id = Hashids::decode($Id)[0];
            $userReposts  =  Profile::getuprofiledetail($id);
            if ( isset($userReposts[0] ))  $userreports = $userReposts[0];
            return view('backend.complains.edit', compact('userreports'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function suspend($Id){
        try {
            $id = Hashids::decode($Id)[0];
            $v = Validator::make([], []);
            $userReposts  =  WU::webUserSuspend($id);
            if (!$userReposts->web_user_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
            return redirect(route('complainV'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
