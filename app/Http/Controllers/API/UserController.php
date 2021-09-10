<?php
/**
 * Created by PhpStorm.
 * User: Junaid
 * Date: 3/14/2019
 * Time: 3:22 PM
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller, Illuminate\Http\Request, App\Constants\API\ErrorCodes as EC;
use \Exception, App\Traits\Users, App\Constants\API\Messages as Msg;

class UserController extends Controller
{

    public function register(Request $request)
    {
        try {
            if ($validator = Users::validateApiUser($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired],  'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $User = Users::createOrUpdateOrDeleteUser($request);
            if (!isset($User->user_id))
                return responseJson(['error' => ['msg' => Msg::userReg[EC::forbidden]]], EC::forbidden, $request); // invalid user/pass
            return responseJson(['success' => ['msg' => Msg::userReg[EC::success], 'data' => $User->toArray()]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function login(Request $request)
    {
//        try {
            if ($validator = Users::validateLogin($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $User = Users::doLogin($request);
            if (!isset($User->user_id))
                return responseJson(['error' => ['msg' => Msg::user[EC::forbidden]]], EC::forbidden, $request); // invalid user/pass
            return responseJson(['success' => ['msg' => Msg::user[EC::success], 'data' => ['access_token' => encodeJWT(Users::ApiPrepareUserData($User), 60)]]], EC::success, $request); // success
//        } catch (Exception $e) {
//            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
//        }
    }
}
