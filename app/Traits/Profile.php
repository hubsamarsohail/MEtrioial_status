<?php

namespace App\Traits;

use App\Http\Controllers\User_image;
use App\Models\City;
use App\Models\Country;
use App\Models\Profile_log;
use App\Models\WebUsers, App\Models\UserImage as UserImage, App\Models\My_favourite as MyFavourite;
use App\Notifications\NewUserGreeting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile as UProfile;
use Illuminate\Database\Eloquent\Builder;
use File;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;

trait Profile
{
    public static function validateProfile($request)
    {
        $validator = Validator::make($request->all(), [
            'sur_name' => 'required|max:25',
            'email' => 'required|max:50',
            'nationality' => 'required|max:25',
            'country_id' => 'required|digits_between:1,20',
            'city_id' => 'required|digits_between:1,20',
            'cast' => 'required|max:25',
            'religion' => 'required|max:25',
            'dob' => 'required|max:25',
            'age' => 'required|max:25',
            'marital_status' => 'required|max:25',
            'hair_color' => 'required|max:25',
            'complexion' => 'required|max:25',
            'mobile' => 'required|max:25',
            'other_lang' => 'required|max:25',
            'ethnicity' => 'required|max:25',
            'eye_color' => 'required|max:25',
            'residential_city' => 'required|digits_between:1,20',
            'skin_color' => 'required|max:25',
            'elementry_school' => 'required|max:25',
            'job_title' => 'required|max:25',
            'skill' => 'required|max:25',
            'body_shape' => 'required|max:25',
            'height' => 'required|max:25',
            'life_style' => 'required|max:25',
            'physique_id' => 'required|digits_between:1,20',
            'salary_range' => 'required',
            'drink_status' => 'required|max:25',
            'pet_status' => 'required|max:25',
            'profession' => 'required|max:25',
            'partner_alcohol' => 'required|max:25',
            'smoke_status' => 'required|max:25',
            'description' => 'required',
            'heigh_school' => 'required',
            'partner_divorce' => 'required|max:25',
            'second_marriage' => 'required|max:25',
            'partner_smoke' => 'required|max:25',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }
    public static function validateUCity($request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required|digits_between:1,20',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }
    public static function ValidateUData($request)
    {
        $validator = Validator::make($request->all(), [
            'attachments' => 'required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }
    public static function selectCity($request)
    {
        $city = City::where('country_id', $request->country_id)->get();
        return $city;
    }

    //main profile suggestion data
    public static function userProfile()
    {
        $gender = session()->get('user_web_data')['user_info']['gender'];
        if ($gender == 'M') $user_gender = 'F';
        else $user_gender = 'M';
        $userProfiles = UProfile::with(['Country', 'users'])
            ->whereHas('users', function ($query) use ($user_gender) {
                if (isset($user_gender)) $query->where('gender', $user_gender);
                if ('1') $query->where('types', '1');
            })->orderBy('user_profile_id', 'DESC')->take(10)->get();
        return $userProfiles;
    }
    //main profile agent data
    public static function userAgentProfile()
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $userProfiles = UProfile::with(['Country', 'users'])
            ->whereHas('users', function ($query) use ($web_user_id) {
                $query->where('web_user_id', '!=', $web_user_id);
                if ('2') $query->where('types', '2');
            })->orderBy('user_profile_id', 'DESC')->take(10)->get();
        return $userProfiles;
    }

    //insert or update data
    public static function createOrUpdateOrDeleteProfile($request)
    {

        if ($request->user_profile_id && $request->user_profile_id != '') $obj = UProfile::find(get_attr_by_enc_dec($request->user_profile_id));
        else $obj = new UProfile();
        $height_cal = explode("-", $request->height);
        $inch = explode("-", $request->inch);
        if (isset($height_cal[0])) {
            $centemter = round($height_cal[0] * 30.48);
        }
        if (isset($inch[0])) {
            $in_center = round($inch[0] * 2.54);
        }
        $height = round($in_center + $centemter);
        if ($request->sur_name != '') $obj->sur_name = $request->sur_name;
        if ($request->email != '') $obj->email = $request->email;
        if ($request->nationality != '') $obj->nationality = $request->nationality;
        if ($request->country_id != '') $obj->country_id = $request->country_id;
        if ($request->city_id != '') $obj->city_id = $request->city_id;
        if ($request->cast != '') $obj->cast = $request->cast;
        if ($request->work_city != '') $obj->work_city = $request->work_city;
        if ($request->religion != '') $obj->religion = $request->religion;
        if ($request->dob != '') $obj->dob = $request->dob;
        if ($request->age != '') $obj->age = $request->age;
        if ($request->marital_status != '') $obj->marital_status = $request->marital_status;
        if ($request->hair_color != '') $obj->hair_color = $request->hair_color;
        if ($request->mother_lang != '') $obj->mother_lang = $request->mother_lang;
        if ($request->complexion != '') $obj->complexion = $request->complexion;
        if ($request->mobile != '') $obj->mobile = $request->mobile;
        if ($request->other_lang != '') $obj->other_lang = $request->other_lang;
        if ($request->body_shape != '') $obj->body_shape = $request->body_shape;
        if ($request->height != '') $obj->height = $height;
        if ($request->life_style != '') $obj->life_style = $request->life_style;
        if ($request->no_of_children != '') $obj->no_of_children = $request->no_of_children;
        if ($request->physique_id != '') $obj->physique_id = $request->physique_id;
        if ($request->salary_range != '') $obj->salary_range = $request->salary_range;
        if ($request->drink_status != '') $obj->drink_status = $request->drink_status;
        if ($request->smoke_status != '') $obj->smoke_status = $request->smoke_status;
        if ($request->pet_status != '') $obj->pet_status = $request->pet_status;
        if ($request->profession != '') $obj->profession = $request->profession;
        if ($request->job_title != '') $obj->job_title = $request->job_title;
        if ($request->skill != '') $obj->skill = $request->skill;
        if ('1' != '') $obj->types = '1';
        if ($request->docor_degree != '') $obj->docor_degree = $request->docor_degree;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        if ($request->residential_city != '') $obj->residential_city = $request->residential_city;
        if ($request->eye_color != '') $obj->eye_color = $request->eye_color;
        if ($request->ethnicity != '') $obj->ethnicity = $request->ethnicity;
        if ($request->skin_color != '') $obj->skin_color = $request->skin_color;
        if ($request->child_age != '') $obj->child_age = $request->child_age;
        if ($request->chat != '') $obj->chat = $request->chat;
        if ($request->phone_cell != '') $obj->phone_cell = $request->phone_cell;
        if ($request->description != '') $obj->description = $request->description;
        if ($request->elementry_school != '') $obj->elementry_school = $request->elementry_school;
        if ($request->heigh_school != '') $obj->heigh_school = $request->heigh_school;
        if ($request->university != '') $obj->university = $request->university;
        if ($request->bachelor_school != '') $obj->bachelor_school = $request->bachelor_school;
        if ($request->master_school != '') $obj->master_school = $request->master_school;
        if ($request->partner_alcohol != '') $obj->partner_alcohol = $request->partner_alcohol;
        if ($request->second_marriage != '') $obj->second_marriage = $request->second_marriage;
        if ($request->partner_smoke != '') $obj->partner_smoke = $request->partner_smoke;
        if ($request->partner_divorce != '') $obj->partner_divorce = $request->partner_divorce;
        if ($request->user_id != '') $obj->web_user_id = $request->user_id;

        if (isset($request->attachments) && count($request->attachments)) {
            $dir = publicPath('/uploads/profile/' . $obj->email);
            if (!isset($request->attachments) && isset($obj->image_path) && $obj->image_path != '') File::delete($dir . '/' . $obj->image_path);
            $obj->image_path = moveAttachments($request, $dir)[0];
        }
        if (isset($request->image)) {
            $dir = publicPath('/uploads/profile/' . $obj->email);
            $uuid = uniqidReal();
            $ext = $request->image->getClientOriginalExtension();
            $fileName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . $uuid . '.' . $ext;
            $request->image->move($dir, $fileName);
            $obj->image_path = $fileName;
        }
        $obj->save();
        return $obj;
    }
//    main profile search data
    public static function getuProfile($request, $all = false, $single = false)
    {
        $webUser = session()->get('user_web_data')['user_info'];
        $gender = session()->get('user_web_data')['user_info']['gender'];
        if ($gender == 'M') $user_gender = 'F';
        else $user_gender = 'M';
        $userProfile = UProfile::with(['Country', 'users'])
            ->whereHas('Country', function ($query) use ($request ) {
                if (isset($request->location)) $query->where('name', $request->location);
            })
            ->whereHas('users', function ($query) use ($request , $user_gender ) {
                if (isset($user_gender)) $query->where('gender', $user_gender);
            })
            ->where(function ($query) use ($request , $webUser ) {
                if ($request->start_age && $request->end_age != '') {
                    $query->where('web_user_id', '!=', $webUser['web_user_id']);
                    $query->whereBetween('age', [$request->start_age, $request->end_age]);
                    if ($request->cast) $query->orWhere('cast', 'LIKE', '%' . $request->cast . '%');
                    $query->where('types', '1');
                }
            })->get();
        foreach ($userProfile as $userdata) {
            $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
            $userdata->my_favourite = MyFavourite::where('web_user_id', $web_user_id)->where('user_profile_id', $userdata->user_profile_id)->get();
            if ($userdata->user_profile_id){
                $fav = MyFavourite::where('user_profile_id', $userdata->user_profile_id)->get()->count();
            } else {
                $fav = MyFavourite::where('web_user_id', $web_user_id)->get()->count();
            }
            $userdata['fav_count'] = $fav;
        }
        return $userProfile;
    }

    //advance seach data
    public static function advanceSeachData($request, $all = false, $single = false)
    {
        $webUser = session()->get('user_web_data')['user_info'];
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
            ->wherehas('users', function($q) use ($webUser) {
                $q->where('gender', '!=', $webUser['gender']);
            })->where(function ($query) use ($request, $height, $webUser) {
                if ( $webUser['web_user_id']) $query->where('web_user_id', '!=', $webUser['web_user_id']);
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
        return $userProfile;
    }

    //user edit data
    public static function getuprofiledetail($request)
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $obj = new Profile_log();
        if (session()->get('user_web_data')['user_info']['web_user_id'] != '') $obj->web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        if ($request != '') $obj->user_profile_id = $request;
        $obj->save();
        $userProfile = UProfile::with('Country', 'users', 'Imagesdata')->where(function ($q) use ($request) {
            if ($request) $q->find($request);
        })->get();
        foreach ($userProfile as $userdata) {
            $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
            $userdata->my_favourite = MyFavourite::where(function ($q) use ($userdata, $web_user_id) {
                if ($userdata->user_profile_id) $q->where('user_profile_id', $userdata->user_profile_id);
                if ($web_user_id) $q->where('web_user_id', $web_user_id);
            })->first();
        }
        return $userProfile;
    }
    public static function getuData($web_user_id)
    {
        $userProfile = UProfile::with('Country', 'users')->where(function ($q) use ($web_user_id) {
            if ($web_user_id) $q->where('web_user_id', $web_user_id);
        })->first();
        return $userProfile;
    }
//    matche profile data get
    public static function getmatcherData()
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $userProfile = UProfile::with('Country:name,country_id', 'users')
            ->where(function ($q) use ($web_user_id) {
                if ($web_user_id) $q->where('web_user_id', $web_user_id);
                if ('1') $q->where('types', '1');
            })->get();
        return $userProfile;
    }
    //agent profile data get
    public static function getAgentData()
    {

        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $userProfile = UProfile::with('Country:name,country_id', 'users')->where(function ($q) use ($web_user_id) {
            if ($web_user_id) $q->where('web_user_id', $web_user_id);
            if ('2') $q->where('types', '2');
        })->get();
        return $userProfile;
    }
//    multiple image get
    public static function userUploadImages($request, $id)
    {
        foreach ($request->attachments as $key => $file) {
            if (isset($file)) {
                $dir = publicPath('/uploads/profile/' . $request->user_profile_id);
                $uuid = uniqidReal();
                $ext = $file->getClientOriginalExtension();
                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . $uuid . '.' . $ext;
                $file->move($dir, $fileName);
                UserImage::create(['image_path' => $fileName, 'web_user_id' => $id]);
            }

        }
        return true;
    }
//    add favourite data
    public static function myFavourite($request)
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $obj = new MyFavourite();
        if ($request->user_profile_id != '') $obj->user_profile_id = $request->user_profile_id;
        if ($web_user_id != '') $obj->web_user_id = $web_user_id;
        $obj->save();
        return $obj;
    }
    //remove favourite record
    public static function myremFavourite($request)
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        MyFavourite::where(function ($q) use ($web_user_id, $request) {
            if ($web_user_id) $q->where('web_user_id', $web_user_id);
            if ($request->user_profile_id) $q->where('user_profile_id', $request->user_profile_id);
        })->delete();
        $obj = 'User Remove From favourite';
        return $obj;

    }
//    get single user/
    public static function getFavourite()
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $webusers = WebUsers::with('profileFavourite')->find($web_user_id);
        foreach ($webusers->profileFavourite as $userprofile) {
            $userprofile->user_name = WebUsers::where('web_user_id', $userprofile->web_user_id)->pluck('first_name');
        }
        return $webusers;
    }
    public static function getParentChildData()
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $parentChildData = WebUsers::with('ParentChild')->find($web_user_id);
        return $parentChildData;
    }
    public static function ProfileLog()
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $profile_logs = Profile_log::with('profile_logs', 'profile_user_logs')
            ->whereHas('profile_logs', function (Builder $query) use ($web_user_id) {
                $query->where('web_user_id', 'like', $web_user_id);
            })
            ->where(function ($query) {
                $query->where("created_at", ">", Carbon::now()->subWeek());
                $query->where("created_at", "<", Carbon::now());
            })
            ->get();
        foreach ($profile_logs as $profile_log) {
            if (isset($profile_log->profile_user_logs[0])) {
                $profile_log->user_profile_data = UProfile::
                where(function ($query) use ($profile_log) {
                    $query->where('web_user_id', $profile_log->profile_user_logs[0]->web_user_id);
                    $query->where('types', '1');
                })
                    ->orderBy('user_profile_id', 'desc')
                    ->limit(1)->first();
            }
        }
        return $profile_logs;
    }

    public static function ProfileLogTotal()
    {

        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $profile_log_total = Profile_log::with(['profile_logs', 'profile_user_logs'])
            ->where('web_user_id', $web_user_id)
            ->groupBy('user_profile_id')
            ->get();

        return $profile_log_total;
    }
        public static function ProfileLogDetail(){
        $profile_log_total = Profile_log::with('profile_logs', 'profile_user_logs')->orderBy('profile_log_id', 'desc')->paginate(10);
        foreach ($profile_log_total as $profile_log) {
            if (isset($profile_log->profile_logs[0])) {
                $profile_log->user_profile_data = WebUsers::
                where(function ($query) use ($profile_log) {
                    $query->where('web_user_id' , $profile_log->profile_logs[0]->web_user_id);
                })->get();
            }
        }

        return $profile_log_total;
    }
    public static function searchData($request)
    {
        $userProfile = UProfile::with('users')
            ->whereHas('users', function ($query) use ($request){
                $query->where('first_name', 'LIKE', '%' . $request->value . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $request->value . '%');
            })
            ->orWhere('nationality', 'LIKE', '%' . $request->value . '%')
            ->orWhere('cast', 'LIKE', '%' . $request->value . '%');
            if($request->type != ''){
                $userProfile->where('types', '=', $request->type);
            }
        $userProfile = $userProfile->get();

        return $userProfile;
    }
}
