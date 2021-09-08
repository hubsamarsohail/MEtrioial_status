<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Traits\Pages;
use Illuminate\Http\Request;
use App\Models\Tenants;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function create(Request $request){
        try {
            if ($request->method() == 'POST') {
//                    dd($request->all());
                if ($v = Pages::PageValidation($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $pages = Pages::createOrUpdateOrDeletePages($request);
                    if (!$pages->page_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('aPagesC'))->withErrors($v)->withInput();
            }
            $tenants = Tenants::get();
            return view('backend.pages.create' , compact('tenants'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function view(Request $request){
        try {
            $all_pages =     Pages::getAllPage();

        return view('backend.pages.view' , compact('all_pages'));
    } catch (\Exception $e) {
return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
}
    }

    public function Delete(Request $request){
        try {   $v = Validator::make([], []);
        $pages = Pages::createOrUpdateOrDeletePages($request);
            if ($pages != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
        return redirect(route('aPagesV'))->withErrors($v)->withInput();
    } catch (\Exception $e) {
return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
}
    }

    public function update(Request $request){
        try {
            if ($request->method() == 'POST') {
                if ($v = Pages::PageValidation($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $pages = Pages::createOrUpdate($request);
                    if (!$pages->page_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                    return redirect(route('aPagesV'))->withErrors($v)->withInput();
                }
            }
            $tenants = Tenants::get();
            $page = Pages::getpagesEdit($request);
            return view('backend.pages.edit', compact('page', 'tenants'));
        } catch (\Exception $e) {
            abort($e->getCode(), $e->getMessage());
        }


        try {   $v = Validator::make([], []);
            $pages = Pages::createOrUpdateOrDeletePages($request);
            if ($pages != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
            return redirect(route('aPagesV'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }





}
