<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, Route;
use App\Traits\Menus;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages, App\Constants\Constant;

class MenuController extends Controller
{
    public function create(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Menus::validateMenu($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Menus::createOrUpdateOrDeleteMenu($request);
                    if (!$obj->menu_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                }
                return redirect(route('aMenuC'))->withErrors($v)->withInput();
            }
            $routes = app()->Route::getRoutes();
            $menus = Menus::getMenus($request, false, false, true);
            $displayInMenus = Constant::displayInMenus;
            $isActive = Constant::isActive;
            return view('backend.menus.create', compact('menus', 'displayInMenus', 'request', 'isActive', 'routes'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function view(Request $request)
    {
        try {
            $menus = Menus::getMenus($request);
            $displayInMenus = Constant::displayInMenus;
            $isActive = Constant::isActive;
            $perPage = Constant::perPage;
            return view('backend.menus.view', compact('menus', 'displayInMenus', 'request', 'isActive', 'perPage'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Menus::validateMenu($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Menus::createOrUpdateOrDeleteMenu($request);
                    if (!$obj->menu_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_updated]);
                }
                return redirect(route('aMenuU', ['menu_id' => $request->menu_id]))->withErrors($v)->withInput();
            }
            $routes = app()->Route::getRoutes();
            $menus = Menus::getMenus($request, false, false, true);
            $record = Menus::getMenus($request, true);
            $displayInMenus = Constant::displayInMenus;
            $isActive = Constant::isActive;
            return view('backend.menus.edit', compact('menus', 'displayInMenus', 'request', 'isActive', 'routes', 'record'));
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {
        try {
            $v = Validator::make([], []);
            $role = Menus::createOrUpdateOrDeleteMenu($request);
            if ($role != true) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
            $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_deleted]);
            return redirect(route('aMenuV'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

}
