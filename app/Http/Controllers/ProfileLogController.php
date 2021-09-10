<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Traits\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileLogController extends Controller
{
    public function view(){
        try {
            $profile_logs =    Profile::ProfileLogDetail();
            return view('backend.profile_log.index', compact('profile_logs'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function viewDetail(){
        try {
            $profile_logs =    Profile::ProfileLogDetail();
            return view('backend.profile_log.view', compact('profile_logs'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


}
