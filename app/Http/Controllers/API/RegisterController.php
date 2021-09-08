<?php

namespace App\Http\Controllers\Api;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Http\Controllers\Controller;
use App\Traits\Registers;
use Illuminate\Http\Request;
use App\Traits\Users;

class RegisterController extends Controller
{
    public function create(Request $request){
        try {
            if ($validator = Users::validateUserRegister($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Users::createOrUpdateOrDeleteUserRegister($request);
            if (!isset($Obj->web_user_id))
                return responseJson(['error' => ['msg' => EC::forbidden]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => EC::success]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }
}
