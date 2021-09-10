<?php

namespace App\Http\Controllers\Frontend;

use App\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Traits\ParentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Hashids;

class ParentProfilecontroller extends Controller
{
    public function  index(Request $request){
        try {
            $childdata = ParentProfile::getChild($request);
            return response()->json($childdata);
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function create(Request $request){
        try {

            $v = Validator::make([], []);
            $obj = ParentProfile::storeParentChild($request);
            Session::flash('success', 'Record has been updated!');
            if (!$obj->parent_child_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);

            return redirect(route('userProfile'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function parentRequest(){
        try {
            $getParentRequest = ParentProfile::getParentReuest();
            return view('frontend.parent_profile.parent_request.index' , compact('getParentRequest'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
    public function parentRequestAccepted($Id){
        try {

            $id = Hashids::decode($Id)[0];
            $getParentRequest = ParentProfile::getParentReuestAccepted($id);
            Session::flash('success', 'Record has been Updated!');
            return back();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function parentChildRequest(){
        try {
            $getParentChildRequest = ParentProfile::getParentchildRequest();
            return view('frontend.parent_profile.parent_child_request.index' , compact('getParentChildRequest'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }

    }





}
