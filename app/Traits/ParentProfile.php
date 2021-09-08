<?php

namespace App\Traits;

use App\Http\Controllers\User_image;
use App\Models\City;
use App\Models\Country;
use App\Models\WebUsers, App\Models\UserImage as UserImage , App\Models\My_favourite as MyFavourite;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile as UProfile, App\Models\Parent_child as ParentChild;
use File;
use GuzzleHttp\Psr7\Request;

trait ParentProfile
{

    public static function getChild($request){
        $childdata = UProfile::with('Country:name,country_id', 'users')->where(function ($q) use ($request) {
            if ($request->user_profile_id) $q->where('user_profile_id', $request->user_profile_id);
            if ('1') $q->where('types', '1');
        })->get();
        foreach ($childdata as $childData)
        {
            $parent_id = session()->get('user_web_data')['user_info']['web_user_id'];
            $childData->parent_child =   ParentChild::where(function ($q) use ($childData, $parent_id) {
                if ($childData->web_user_id) $q->where('child_id', $childData->web_user_id);
                if ($parent_id) $q->where('parent_id', $parent_id);
            })->get();
        }
        return $childdata;
    }

    public static function storeParentChild($request){
        $parent_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $obj = new ParentChild();
        if ($request->user_profile_id != '') $obj->child_id = $request->user_profile_id;
        if ($parent_id != '') $obj->parent_id  = $parent_id;
         $obj->save();
        return $obj;
    }

    public static function getParentReuest(){
        $child_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $parentRequests =    ParentChild::with('parentRequest', 'parentusers', 'childusers')->where(function ($q) use ($child_id) {
            if ($child_id) $q->where('child_id', $child_id);
        })->get();

        return $parentRequests;
    }

    public static function getParentReuestAccepted($parent_id){
        $child_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $parentRequests =    ParentChild::where(function ($q) use ($child_id , $parent_id) {
            if ($child_id) $q->where('child_id', $child_id);
            if ($parent_id) $q->where('parent_id', $parent_id);
        })->get();
        if (isset($parentRequests))
        {
            $parentRequests[0]->update(['is_active'=>'1']);
       }
        return $parentRequests;
    }

    public static function getParentchildRequest(){
        $parent_id = session()->get('user_web_data')['user_info']['web_user_id'];
        $getParentchildRequest = WebUsers::with('ParentChild')->find($parent_id);
        foreach ($getParentchildRequest->ParentChild  as $child){
              $web_user_id =   $child->web_user_id;
               $child->uProfiles  =  UProfile::with('users')->where(function ($q) use ($web_user_id) {
                    if ($web_user_id) $q->where('web_user_id', $web_user_id);
                     $q->where('types', '1');
                })->get();

            $child->parentchild  =  ParentChild::where(function ($q) use ($web_user_id , $parent_id) {
                if ($web_user_id) $q->where('child_id', $web_user_id);
                if ($parent_id) $q->where('parent_id', $parent_id);
            })->get();
        }
        return $getParentchildRequest;
    }



}
