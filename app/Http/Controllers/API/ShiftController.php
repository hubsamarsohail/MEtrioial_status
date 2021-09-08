<?php
/**
 * Created by PhpStorm.
 * User: Junaid
 * Date: 3/14/2019
 * Time: 3:22 PM
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller, Illuminate\Http\Request, App\Constants\API\ErrorCodes as EC;
use \Exception, App\Traits\Shifts, App\Constants\API\Messages as Msg;

class ShiftController extends Controller
{

    public function create(Request $request)
    {
        try {
            if ($validator = Shifts::validateShift($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Shifts::createOrUpdateOrDeleteShift($request);
            if (!isset($Obj->shift_id))
                return responseJson(['error' => ['msg' => Msg::shifts['create'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::shifts['create'][EC::success], 'data' => Shifts::prepareCreateShiftResponse($Obj)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function view(Request $request)
    {
        try {
            if ($validator = Shifts::validateShiftParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Shifts = Shifts::getShifts($request, true);
            return responseJson(['success' => ['msg' => Msg::shifts['view'][EC::success], 'data' => Shifts::prepareViewShiftResponse($Shifts)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function update(Request $request)
    {
        try {
            $request->request->add(['shiftReq' => true]);
            if ($validator = Shifts::validateShift($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Shifts::validateShiftWithTenant($request);
            if(!isset($Obj->shift_id)) // Motorway is not associated with the tenant
                return responseJson(['error' => ['msg' => Msg::shifts['shift'][EC::forbidden]]], EC::forbidden, $request);
            $Obj = Shifts::createOrUpdateOrDeleteShift($request);
            if (!isset($Obj->shift_id))
                return responseJson(['error' => ['msg' => Msg::shifts['update'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::shifts['update'][EC::success], 'data' => Shifts::prepareCreateShiftResponse($Obj)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }


    public function delete(Request $request)
    {
        try {
            $request->request->add(['shiftReq' => true, 'action' => 'delete']);
            if ($validator = Shifts::validateShiftParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Shifts::validateShiftWithTenant($request);
            if(!isset($Obj->shift_id)) // Motorway is not associated with the tenant
                return responseJson(['error' => ['msg' => Msg::shifts['shift'][EC::forbidden]]], EC::forbidden, $request);
            $Obj = Shifts::createOrUpdateOrDeleteShift($request);
            if ($Obj != true)
                return responseJson(['error' => ['msg' => Msg::shifts['delete'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::shifts['delete'][EC::success], 'data' => []]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }

    }

}