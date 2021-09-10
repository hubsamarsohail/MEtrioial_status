<?php

namespace App\Http\Controllers\Api;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Models\Parent_child as ParentChild;
use App\Models\Profile as UProfile;
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
            $childdata = UProfile::with('Country:name,country_id', 'users')->where(function ($q) use ($request) {
                if ($request->user_profile_id) $q->where('user_profile_id', $request->user_profile_id);
                if ('1') $q->where('types', '1');
            })->get();
            foreach ($childdata as $childData)
            {
                $childData->parent_child =   ParentChild::where(function ($q) use ($childData, $request ) {
                    if ($childData->web_user_id) $q->where('child_id', $childData->web_user_id);
                    if ($request->user_id) $q->where('parent_id', $request->user_id);
                })->get();
            }
            return response()->json($childdata);
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $obj = new ParentChild();
            if ($request->user_profile_id != '') $obj->child_id = $request->user_profile_id;
            if ($request->user_id != '') $obj->parent_id  = $request->user_id;
            $obj->save();
            if (isset($Obj->parent_child_id));{
                $data = ['statu'=>'200', 'message'=>'your request send to your child' ];
                return response()->json($data);
            }

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
