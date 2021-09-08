<?php

namespace App\Http\Controllers\Api;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use App\Models\Country;
use App\Models\Profile as UProfile;
use App\Traits\ParentProfile;
use App\Traits\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Utils;
use function React\Promise\all;

class ProfileController extends Controller
{
    public function create(UserProfileRequest $request)
    {
        try {
            $obj = Profile::createOrUpdateOrDeleteProfile($request);
            $data['obj'] = $obj;
            $data['status'] = 200;
            $data['message'] = 'Matcher Record Added!';
            return  response()->json($data);
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function ViewCountry()
    {
        try {
            $countries = Country::get();
            return response()->json($countries);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception); // exception
        }
    }

    public function ViewCity(Request $request)
    {
        try {
             $obj = Profile::selectCity($request);
            return responseJson(['success' => ['msg' => Msg::Cities['view'][EC::success], 'data' => $obj]], EC::success, $request); // success

        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function ViewMatcher(Request $request)
    {
        try {
            $userProfile = UProfile::with('Country:name,country_id', 'users')
                ->where(function ($q) use ($request) {
                    if ($request->user_id) $q->where('web_user_id' , '!=',  $request->user_id);
                    if ('1') $q->where('types', '1');
                })->get();
            return response()->json($userProfile);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function searchUserdata(Request $request)
    {
        try {
            $uProfiles = Profile::getuProfile($request);
            return response()->json($uProfiles);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }


    public function userEdit(Request $request)
    {
        try {

            $userProfile =  Profile::getuData($user_profile_id);
            return response()->json($uProfiles);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }


}
