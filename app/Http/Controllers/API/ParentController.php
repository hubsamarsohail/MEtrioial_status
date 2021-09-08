<?php

namespace App\Http\Controllers\Api;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Traits\AgentProfile;
use App\Traits\ParentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ParentController extends Controller
{
    public function index(Request $request)
    {
        try {
            $childdata = ParentProfile::getChild($request);
            return response()->json($childdata);
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $obj = ParentProfile::storeParentChild($request);
            if (!isset($Obj->parent_child_id))
                return responseJson(['error' => ['msg' => EC::forbidden]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => EC::success]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

//    public function create(Request $request)
//    {
//        try {
//            $obj = ParentProfile::storeParentChild($request);
//            if (!isset($Obj->parent_child_id))
//                return responseJson(['error' => ['msg' => EC::forbidden]], EC::forbidden, $request);
//            return responseJson(['success' => ['msg' => EC::success]], EC::success, $request); // success
//        } catch (Exception $e) {
//            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
//        }
//    }

}
