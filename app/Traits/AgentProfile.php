<?php

namespace App\Traits;

use App\Http\Controllers\User_image;
use App\Models\City;
use App\Models\Country;
use App\Models\WebUsers, App\Models\UserImage as UserImage , App\Models\My_favourite as MyFavourite;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile as UProfile;
use File;
use GuzzleHttp\Psr7\Request;

trait AgentProfile
{
    public static function validateagentProfile($request)
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
            'mobile' => 'required|max:25',
            'other_lang' => 'required|max:25',
            'ethnicity' => 'required|max:25',
            'residential_city' => 'required|digits_between:1,20',
            'education' => 'required|max:25',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function createOrUpdateOrDeleteProfile($request)
    {

        if ($request->user_profile_id && $request->user_profile_id != '') $obj = UProfile::find(get_attr_by_enc_dec($request->user_profile_id));
        else $obj = new UProfile();
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
        if ($request->mother_lang != '') $obj->mother_lang = $request->mother_lang;
        if ($request->mobile != '') $obj->mobile = $request->mobile;
        if ($request->other_lang != '') $obj->other_lang = $request->other_lang;
        if ($request->job_title != '') $obj->job_title = $request->job_title;
        if ($request->skill != '') $obj->skill = $request->skill;
        if ($request->education != '') $obj->education = $request->education;
        if ('2' != '') $obj->types = '2';
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        if ($request->business_turnour != '') $obj->business_turnour = $request->business_turnour;
        if ($request->address != '') $obj->address = $request->address;
        if ($request->residential_city != '') $obj->residential_city = $request->residential_city;
        if ($request->ethnicity != '') $obj->ethnicity = $request->ethnicity;
        if ($request->chat != '') $obj->chat = $request->chat;
        if ($request->phone_cell != '') $obj->phone_cell = $request->phone_cell;
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


    public static function getAgentSearch($request)
    {
        $web_user_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $userProfile = UProfile::with(['Country', 'users'])
            ->whereHas('Country', function ($query) use ($request) {
                if (isset($request->location)) $query->where('name', $request->location);
            })
            ->whereHas('users', function ($query) use ($request ) {
                if (isset($request->gender)) $query->where('gender', $request->gender);
            })
            ->where(function ($query) use ($request , $web_user_id) {
                if ($request->start_age && $request->end_age != '') {
                    $query->where('web_user_id', '!=', $web_user_id);
                    $query->whereBetween('age', [$request->start_age, $request->end_age]);
                    $query->where('types', '2');
                }
            })->get();
        return $userProfile;
    }

    public static function getSuggestionSearch($request)
    {
        $gender = session()->get('user_web_data')['user_info']['gender'];
        if ($gender == 'M') $user_gender = 'F';
        else $user_gender = 'M';
        $userProfile = UProfile::with(['Country', 'users'])
            ->whereHas('Country', function ($query) use ($request) {
                if (isset($request->location)) $query->where('name', $request->location);
            })
            ->whereHas('users', function ($query) use ($request, $user_gender) {
                if (isset($user_gender)) $query->where('gender', $user_gender);
            })
            ->where(function ($query) use ($request) {
                if ($request->start_age && $request->end_age != '') {
                    $query->whereBetween('age', [$request->start_age, $request->end_age]);
                    if ($request->cast) $query->Where('cast', $request->cast);
                    $query->where('types', '1');
                }
            })->get();
        return $userProfile;
    }

}
