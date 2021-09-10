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

    public function searchAgentdata(Request $request)
    {
        try {
            $userProfile = UProfile::with(['Country', 'users'])
                ->whereHas('Country', function ($query) use ($request) {
                    if (isset($request->location)) $query->where('name', $request->location);
                })
                ->whereHas('users', function ($query) use ($request) {
                    if (isset($request->gender)) $query->where('gender', $request->gender);
                })
                ->where(function ($query) use ($request) {
                    $query->where('web_user_id', '!=', $request->user_id);
                    if ($request->start_age && $request->end_age != '') {
                        $query->whereBetween('age', [$request->start_age, $request->end_age]);
                        $query->where('types', '2');
                    }
                })->get();
            return response()->json($userProfile);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }




}
