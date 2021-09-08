<?php

namespace App\Http\Controllers\Api;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Http\Controllers\Controller;
use App\Models\Profile as UProfile;
use App\Traits\AgentProfile;
use App\Traits\Profile;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function create(Request $request){
        try {
             if ($validator = AgentProfile::validateagentProfile($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $obj = AgentProfile::createOrUpdateOrDeleteProfile($request);
            $data['obj'] = $obj;
            $data['status'] = 200;
            $data['message'] = 'Agent Record Added!';
            return  response()->json($data);

        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }


    public function ViewAgent(Request $request)
    {
        try {
            $userProfile = UProfile::with('Country:name,country_id', 'users')->where(function ($q)  {
                if ('2') $q->where('types', '2');
            })->get();
            return response()->json($userProfile);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }
}
