<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WebUsers;
use App\Notifications\NewUserGreeting;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use App\Models\City;
use App\Models\Complain_type;
use App\Traits\ComplainType;
use Illuminate\Http\Request;
use App\Constants\Constant;
use Illuminate\Support\Facades\Validator;
use App\Traits\Profile;
use App\Constants\Messages;
use App\Models\Country;
use App\Models\Profile as UProfile;
use Hashids;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];

            $user_prifiles = UProfile::where('web_user_id', $web_user_id)->first();
            if (!empty($user_prifiles)) {
             return redirect('user_profile/detail');
            } else{
                $religions = Constant::religions;
            $marital_status = Constant::marital_status;
            $languages = Constant::Language;
            $complexions = Constant::Complexion;
            $body_shapes = Constant::Body_shape;
            $life_styles = Constant::Life_style;
            $physiques = Constant::Physique;
            $salarys = Constant::Salary;
            $heights = Constant::height;
            $eyescolors = Constant::EyesColor;
            $ethnicities = Constant::Ethnicity;
            $skincolors = Constant::SkinColor;
            $inches = Constant::Inches;
            $countries = Country::get();
            $cities = City::get();
            $userProfile = Profile::getmatcherData();
            $getParentChildDatas = Profile::getParentChildData();
            $agentProfile = Profile::getAgentData();
            return view('frontend.profile.create', compact('cities', 'getParentChildDatas', 'religions', 'agentProfile', 'userProfile', 'skincolors', 'inches', 'ethnicities', 'eyescolors', 'countries', 'marital_status', 'languages', 'complexions', 'body_shapes', 'life_styles', 'physiques', 'salarys', 'heights'));
        }
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Profile::validateProfile($request))
                {$v = validatorMessages($v, ['mClass' => 'error']);
                    Session::flash('warning', 'Oops! action could not complete!');
                }
                else {
                   $v = Validator::make([], []);
                    $obj = Profile::createOrUpdateOrDeleteProfile($request);
                    Session::flash('success', 'Record Added!');
                    if (!$obj->user_profile_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);

                    return redirect(route('uProfileDetail'))->withErrors($v)->withInput();
                }
            }
            return redirect(route('userProfile'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function create()
    {
        try {
            $uProfiles = Profile::userProfile();
            $uagentProfiles = Profile::userAgentProfile();
            $getcomplainTypes  = Complain_type::where('is_active', '1')->get();
            return view('frontend.profile.index', compact('uProfiles','getcomplainTypes',  'uagentProfiles'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function City(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Profile::validateUCity($request)) $v = validatorMessages($v, ['mClass' => 'error']);
                else {
                    $v = Validator::make([], []);
                    $obj = Profile::selectCity($request);
                    return response()->json($obj);
                }
            }
            return redirect(route('uProfileDetail'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('frontend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function uDetail($Id)
    {
        try {
            $religions = Constant::religions;
            $marital_status = Constant::marital_status;
            $languages = Constant::Language;
            $complexions = Constant::Complexion;
            $body_shapes = Constant::Body_shape;
            $life_styles = Constant::Life_style;
            $physiques = Constant::Physique;
            $salarys = Constant::Salary;
            $heights = Constant::height;
            $eyescolors = Constant::EyesColor;
            $ethnicities = Constant::Ethnicity;
            $skincolors = Constant::SkinColor;
            $inches = Constant::Inches;
            $id = Hashids::decode($Id)[0];
            $uProfiles = Profile::getuprofiledetail($id);


            $user= WebUsers::find(session()->get('user_web_data')['user_info']['web_user_id']);

//            Notification::send($user, new NewUserGreeting('Notification!'));
//            $this->send_firebase_order_notification('fz2AMvHaoLc:APA91bEcthByz5SGn38ugH_Mktp_yK13nADpY5-nzKlfH_WNBA7nfdo4YR52g510FxZ7FW1I7tuADdLQXVhheLSnAR30Bds0SYFLF5JIvNGlf1guDE2DyFGVcaWRw7PxHLf6Chdxguf7' , "HNotification!");


            return view('frontend.profile.user_detail', compact('uProfiles', 'religions', 'skincolors', 'inches', 'ethnicities', 'eyescolors', 'marital_status', 'languages', 'complexions', 'body_shapes', 'life_styles', 'physiques', 'salarys', 'heights'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function searchUserdata(Request $request)
    {
        $uProfiles = Profile::getuProfile($request);
        return view('frontend.profile.partial.index', compact('uProfiles'))->render();
    }

    public function advanceSearch()
    {
        try {
            $heights = Constant::height;
            $inches = Constant::Inches;
            $languages = Constant::Language;
            $marital_status = Constant::marital_status;
            $ethnicities = Constant::Ethnicity;
            $body_shapes = Constant::Body_shape;
            $religions = Constant::religions;
            $types = Constant::types;
            return view('frontend.profile.advance_search', compact('types','marital_status', 'religions', 'ethnicities', 'languages', 'body_shapes', 'heights', 'inches'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function advanceSearchData(Request $request)
    {
        try {

            $uProfiles = Profile::advanceSeachData($request);

            return view('frontend.profile.partial.advance_search', compact('uProfiles'))->render();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function userEdit($Id)
    {
        try {

            $religions = Constant::religions;
            $marital_status = Constant::marital_status;
            $languages = Constant::Language;
            $complexions = Constant::Complexion;
            $body_shapes = Constant::Body_shape;
            $life_styles = Constant::Life_style;
            $physiques = Constant::Physique;
            $salarys = Constant::Salary;
            $heights = Constant::height;
            $eyescolors = Constant::EyesColor;
            $ethnicities = Constant::Ethnicity;
            $skincolors = Constant::SkinColor;
            $inches = Constant::Inches;
            $countries = Country::get();
            $web_user_id = Hashids::decode($Id)[0];
            $userProfile =  Profile::getuData($web_user_id);
            if (empty($userProfile)){
                Session::flash('warning', 'Please Create Profile Before!');

                return redirect(route('uProfileDetail'));
            }else{
            return view('frontend.profile.edit' ,compact('userProfile' , 'religions', 'skincolors', 'inches', 'ethnicities', 'eyescolors', 'countries', 'marital_status', 'languages', 'complexions', 'body_shapes', 'life_styles', 'physiques', 'salarys', 'heights'));
            }
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function useruploadImage(Request $request, $Id)
    {
        try {
            if ($request->method() == 'POST') {
                if ($v = Profile::ValidateUData($request))
                {$v = validatorMessages($v, ['mClass' => 'error']);
                    Session::flash('warning', 'Oops! action could not complete!');}
                else {
                    $user_profile_id = Hashids::decode($Id)[0];
                    $v = Validator::make([], []);
                    $obj = Profile::userUploadImages($request, $user_profile_id);
                    Session::flash('success', 'Record Added OR Updated!');
                    return redirect(route('uProfileDetail'))->withErrors($v)->withInput();
                }
            }
            return redirect(route('user.edit'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function myFavourite(Request $request)
    {
        try {
            $obj = Profile::myFavourite($request);
            Session::flash('success', 'User added into Favourite List!');
            return response()->json($obj);
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
    public function myremFavourite(Request $request)
    {
        try {
            $obj = Profile::myremFavourite($request);
            Session::flash('warning', 'User removed into your Favourite List!');
            return response()->json($obj);
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function gtefavourite()
    {
        try {
            $usersuggestions = Profile::getFavourite();
            return view('frontend.profile.my_favourite' , compact('usersuggestions'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function profileLog()
    {
        try {
             $profile_logs = Profile::ProfileLog();
            $profile_log_total = Profile::ProfileLogTotal();

            return view('frontend.profile_log.index', compact('profile_logs', 'profile_log_total'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function profileLogPast()
    {
        try {
            $profile_logs = Profile::ProfileLog();
            return view('frontend.profile_log.view', compact('profile_logs'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function profileLogPastTotal()
    {
        try {
            $profile_logs = Profile::ProfileLogTotal();
            return view('frontend.profile_log.view', compact('profile_logs'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function seachMain(Request $request)
    {
        try {
            $profile_searchs = Profile::searchData($request);
            return view('frontend.main_Search.index', compact('profile_searchs', 'request'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }




//    public function profileMatcher()
//    {
////          "web_user_id" => 17
////          "username" => "Zunaira"
////          "lastname" => "Ashraf"
////          "user_web_email" => "zunaira@gmail.com"
////          "is_active" => 1
////          "gender" => "F"
//        $webUser = session()->get('user_web_data')['user_info'];
//        $profiles = UProfile::with('users')
//            ->matcher()
//            ->active()
//            ->where('web_user_id', '!=', $webUser['web_user_id'])
//            ->wherehas('users', function($q) use ($webUser) {
//                $q->where('gender', '!=', $webUser['gender']);
//            })
//            ->get();
//
//        foreach($profiles as $profile){
//            $profile->percentage = 30;
//
//            if($profile->cast == 'AWAN'){
//                $profile->percentage = $profile->percentage + 20;
//            }
//
//            if($profile->skin_color == '5'){
//                $profile->percentage = $profile->percentage + 10;
//            }
//        }
//
//        dd($profiles->toArray());
//        try {
//            $profile_logs = Profile::ProfileLogTotal();
//            return view('frontend.profile_log.view', compact('profile_logs'));
//        } catch (\Exception $e) {
//            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
//        }



//    }













}
