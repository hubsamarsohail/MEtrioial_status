<?php

namespace App\Http\Controllers\Api;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use App\Models\Country;
use App\Models\My_favourite as MyFavourite;
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
            $userProfile = UProfile::with(['Country', 'users'])
                ->whereHas('Country', function ($query) use ($request ) {
                    if (isset($request->location)) $query->where('name', $request->location);
                })
                ->whereHas('users', function ($query) use ($request  ) {
                    if (isset($request->gender)) $query->where('gender', $request->gender);
                })
                ->where(function ($query) use ($request ) {
                    if ($request->start_age && $request->end_age != '') {
                        $query->where('web_user_id', '!=', $request->user_id);
                        $query->whereBetween('age', [$request->start_age, $request->end_age]);
                        if ($request->cast) $query->orWhere('cast', 'LIKE', '%' . $request->cast . '%');
                        $query->where('types', '1');
                    }
                })->get();

            foreach ($userProfile as $userdata) {
                $userdata->my_favourite = MyFavourite::where('web_user_id', $request->user_id)->where('user_profile_id', $userdata->user_profile_id)->get();
                if ($userdata->user_profile_id){
                    $fav = MyFavourite::where('user_profile_id', $userdata->user_profile_id)->get()->count();
                } else {
                    $fav = MyFavourite::where('web_user_id', $request->user_id)->get()->count();
                }
                $userdata['fav_count'] = $fav;
            }
            return response()->json($userProfile);; // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }


    public function searchAdvancedata(Request $request)
    {
        try {
            $height = '';
            if (isset($request->feet)) {
                $height_cal = explode("-", $request->feet);
                $inch = explode("-", $request->inch);
                if (isset($height_cal[0])) {
                    $centemter = round($height_cal[0] * 30.48);
                }
                if (isset($inch[0])) {
                    $in_center = round($inch[0] * 2.54);
                }
                $height = round($in_center + $centemter);
            }
            $userProfile = UProfile::with(['Country', 'users'])
                ->wherehas('users', function($q) use ($request) {
                    $q->where('gender', '!=', $request->gender);
                })->where(function ($query) use ($request, $height) {
                    if ( $request->user_id) $query->where('web_user_id', '!=', $request->user_id);
                    if ($request->cast) $query->Where('cast', $request->cast );
                    if ($request->mother_lang) $query->Where('mother_lang', $request->mother_lang );
                    if ($height) $query->Where('height', $height );
                    if ($request->marital_status) $query->Where('marital_status',  $request->marital_status);
                    if ($request->religion) $query->Where('religion',  $request->religion );
                    if ($request->ethnicity) $query->Where('ethnicity',  $request->ethnicity);
                    if ($request->body_shape) $query->Where('body_shape',  $request->body_shape);
                    if ($request->drink_status) $query->Where('drink_status', $request->drink_status);
                    if ($request->smoke_status) $query->Where('smoke_status',  $request->smoke_status );
                    if ($request->types) $query->Where('types' , $request->types );
                })->get();
            return response()->json($userProfile);
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }







}
