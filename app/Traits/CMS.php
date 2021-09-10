<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\CMS as DM, App\Models\CMSSliderImages as CMS_Slider;
use Illuminate\Validation\Rule;
use App\Constants\API\Constant, App\Constants\API\Messages;


trait CMS
{

    public static function validateCMS($request)
    {
        $validator = Validator::make($request->all(), [
            'tenant_id' => 'required|digits_between:1,20',
            'site_title' => 'required|max:150',
            'logo' => 'sometimes|required',
            'meta_title' => 'sometimes|required|max:70',
            'meta_description' => 'sometimes|required|max:200',
            'facebook_url' => 'sometimes|required|max:150',
            'twitter_url' => 'sometimes|required|max:150',
            'linkedin_url' => 'sometimes|required|max:150',
            'youtube_url' => 'sometimes|required|max:150',
            'instagram_url' => 'sometimes|required|max:150',
            'video_url' => 'sometimes|required|max:150',
            'contact_url' => 'sometimes|required|max:255',
            'contact_email' => 'sometimes|required|max:255',
            'contact_number' => 'sometimes|required|max:150',
            'contact_address' => 'sometimes|required|max:255',
            'slider_titles.*' => 'sometimes|required|max:50',
            'slider_descriptions.*' => 'sometimes|required|max:200',
            'slider_images.*' => 'sometimes|required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function validateCMSParams($request)
    {
        $data = [
            'tenant_id' => 'required|digits_between:1,20',
            'site_title' => ($request->updateCMS ? '' : 'sometimes|').'required|max:150',
            'logo' => 'sometimes|required',
            'meta_title' => 'sometimes|required|max:70',
            'meta_description' => 'sometimes|required|max:200',
            'facebook_url' => 'sometimes|required|max:150',
            'twitter_url' => 'sometimes|required|max:150',
            'linkedin_url' => 'sometimes|required|max:150',
            'youtube_url' => 'sometimes|required|max:150',
            'instagram_url' => 'sometimes|required|max:150',
            'video_url' => 'sometimes|required|max:150',
            'contact_url' => 'sometimes|required|max:255',
            'contact_email' => 'sometimes|required|max:255',
            'contact_number' => 'sometimes|required|max:150',
            'contact_address' => 'sometimes|required|max:255',
            'slider_titles.*' => 'sometimes|required|max:50',
            'slider_descriptions.*' => 'sometimes|required|max:200',
            'slider_images.*' => 'sometimes|required',
        ];
        if ($request->updateCMS) {
            $data['cms_id'] = [
                'required',
                Rule::unique('cms')->where(function ($query) use ($request) {
                    $qry = $query->where('tenant_id', $request->tenant_id);
                    $qry = $qry->where('cms_id', $request->cms_id);
                    return $qry;
                })->ignore(get_attr_by_enc_dec($request->cms_id), 'cms_id'),
            ];
        }
        $validator = Validator::make($request->all(), $data);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getCMS($request, $all = false, $single = false)
    {
        $records = DM::where(function ($q) use ($request) {
            if ($request->s && $request->s != '') {
                $q->where(function ($query) use ($request) {
                    $query->orWhere('site_title', 'LIKE', '%' . $request->s . '%');
                });
            }
            if($request->tenant_id) $q->where('tenant_id', '=', get_attr_by_enc_dec($request->tenant_id));
        });
        if ($all) $records = $records->get();
        else if ($single) $records = $records->first();
        else $records = $records->paginate((isset($request->per_page) ? $request->per_page : 10));
        return $records;
    }

    public static function createOrUpdateOrDeleteCMS($request)
    {
        if ($request->cms_id && $request->cms_id != '') {
            $obj = DM::find(get_attr_by_enc_dec($request->cms_id));
            if (!$obj) return false;
        } else
            $obj = new DM();
        if($request->updateCMS || $request->deleteCMS) {
            if(isset($obj->tenant_id) && $obj->tenant_id != get_tenant_id($request))
                return false;
        }
        if ($request->site_title) $obj->site_title = $request->site_title;
        if ($request->meta_title) $obj->meta_title = $request->meta_title;
        if ($request->meta_description) $obj->meta_description = $request->meta_description;
        if ($request->facebool_url) $obj->fb_url = $request->facebool_url;
        if ($request->twitter_url) $obj->tw_url = $request->twitter_url;
        if ($request->linkedin_url) $obj->ln_url = $request->linkedin_url;
        if ($request->youtube_url) $obj->yt_url = $request->youtube_url;
        if ($request->instagram_url) $obj->in_url = $request->instagram_url;
        if ($request->video_url) $obj->video_url = $request->video_url;
        if ($request->contact_url) $obj->contact_url = $request->contact_url;
        if($request->contact_email) $obj->contact_email = $request->contact_email;
        if($request->contact_number) $obj->contact_number = $request->contact_number;
        if($request->contact_address) $obj->contact_address = $request->contact_address;
        $obj->created_by = get_user_id($request);
        $obj->tenant_id = get_tenant_id($request);
        $obj->save();
        if(trim($request->logo)) {
            if($img = upload_base64_img(trim($request->logo), '/uploads/cms/logo/'.$obj->cms_id)) {
                if($request->updateCMS) unlink_file('/uploads/cms/logo/'.$obj->cms_id, $obj->logo);
                $obj->logo = $img;
                $obj->save();
            }
        }
        if($request->slider_images && is_array($request->slider_images)) {
            foreach ($obj->CMSSliderImages as $img)// Eliminate Previous
                @unlink_file('/uploads/cms/slider_images/'.$obj->cms_id, $img->img_name);
            CMS_Slider::where('cms_id', '=', $obj->cms_id)->delete();
            $counter = 0;
            foreach($request->slider_images as $img) {
                if($img_name = upload_base64_img(trim($img), '/uploads/cms/slider_images/'.$obj->cms_id)) {
                    $slider = new CMS_Slider();
                    $slider->cms_id = $obj->cms_id;
                    $slider->created_by = get_user_id($request);
                    $slider->tenant_id = get_tenant_id($request);
                    $slider->img_name = $img_name;
                    if($request->slider_titles[$counter]) $slider->img_title = $request->slider_titles[$counter];
                    if($request->slider_descriptions[$counter]) $slider->img_description = $request->slider_descriptions[$counter];
                    $slider->save();
                }
                $counter ++;
            }
        }
        return $obj;
    }

    public static function prepareCmsData($Record)
    {
        $Record->makeHidden(['tenant_id']);
        $data = $Record->toArray();
        if($Record->logo != '')
            $data['logo'] = Constant::publicDirUrl.'uploads/cms/logo/'.$Record->cms_id.'/'.$Record->logo;
        foreach ($Record->CMSSliderImages as $img) {
            if($img->img_name != '')
                $data['slider_images'][] = [
                    'url' => Constant::publicDirUrl.'uploads/cms/slider_images/'.$Record->cms_id.'/'.$img->img_name,
                    'title' => $img->img_title,
                    'description' => $img->img_description,
                ];
        }
        if(isset($data['c_m_s_slider_images'])) unset($data['c_m_s_slider_images']);
        return $data;
    }

}
