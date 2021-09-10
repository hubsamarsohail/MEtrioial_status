<?php

namespace App\Traits;

use App\Models\Page_image;
use http\Env\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pages as P;

use File, Illuminate\Validation\Rule;
use App\Constants\API\Constant, App\Constants\API\Messages;


trait Pages
{




    public static function PageValidation($request)
    {
        $validator = Validator::make($request->all(), [
//            'is_active' => 'required|digits_between:1,20',
            'title' => 'required|max:25',
            'description' => 'required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }


    public static function validatePage($request)
    {
        $validator = Validator::make($request->all(), [
            'tenant_id' => 'required|digits_between:1,20',
            'page_id' => 'sometimes|required|digits_between:1,20',
            'parent_page_id' => 'sometimes|required|digits_between:1,20',
            'is_active' => 'sometimes|required|integer|in:' . implode(',', array_values(Constant::isActive)),
            'title' => [
                'required',
                Rule::unique('pages')->where(function ($query) use ($request) {
                    $qry = $query->where('title', $request->title);
                    $qry = $qry->where('tenant_id', $request->tenant_id);
                    return $qry;
                }),
            ],
            'body' => 'required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function validatePageParams($request)
    {
        $data = [
            'tenant_id' => 'required|digits_between:1,20',
            'is_active' => 'sometimes|required|in:' . implode(',', array_values(Constant::isActive)),
            'page_id' => ($request->deletePage || $request->updatePage ? '' : 'sometimes|') . 'required|digits_between:1,20',
            'parent_page_id' => 'sometimes|required|digits_between:1,20',
        ];
        if ($request->updatePage) {
            $data['title'] = [
                'required',
                Rule::unique('pages')->where(function ($query) use ($request) {
                    $qry = $query->where('title', $request->title);
                    $qry = $qry->where('tenant_id', $request->tenant_id);
                    return $qry;
                })->ignore(get_attr_by_enc_dec($request->page_id), 'page_id'),
            ];
            $data['body'] = 'required';
        }
        $validator = Validator::make($request->all(), $data);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getPages($request, $all = false, $single = false)
    {
        $records = P::where(function ($q) use ($request) {
            if ($request->is_active != '') $q->where('is_active', '=', $request->is_active);
            if ($request->s && $request->s != '') {
                $q->where(function ($query) use ($request) {
                    $query->orWhere('title', 'LIKE', '%' . $request->s . '%');
                });
            }
        });
        if ($all) $records = $records->get();
        else if ($single) $records = $records->first();
        else $records = $records->paginate((isset($request->per_page) ? $request->per_page : 10));
        return $records;
    }

    public static function  createOrUpdateOrDeletePage($request)
    {
        if ($request->page_id && $request->page_id != '') {
            $obj = P::find(get_attr_by_enc_dec($request->page_id));
            if (!$obj) return false;
        } else $obj = new P();
        if($request->updatePage || $request->deletePage) {
            if(isset($obj->tenant_id) && $obj->tenant_id != get_tenant_id($request))
                return false;
        }
        if ($request->action == 'delete') return $obj->delete();
        if ($request->title) $obj->title = $request->title;
        if ($request->body) $obj->body = $request->body;
        if ($request->parent_page_id) $obj->parent_page_id = $request->parent_page_id;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        $obj->created_by = get_user_id($request);
        $obj->tenant_id = get_tenant_id($request);
        $obj->save();
        return $obj;
    }

    public static function preparePagesData($Records)
    {
        $data = [];
        foreach ($Records as $Record) {
            $Record->makeHidden(['tenant_id']);
            $data[] = $Record->toArray();
        }
        return $data;
    }

    public static function  createOrUpdateOrDeletePages($request)
    {

        if ($request->page_id && $request->page_id != '') $obj = \App\Models\Pages::find(get_attr_by_enc_dec($request->page_id));
        else $obj = new P();
        if ($request->title != '') $obj->title = $request->title;
        if ($request->description != '') $obj->body = $request->description;
        if (session()->get('b_user_data')['user_info']['user_id'] != '') $obj->tenant_id = session()->get('b_user_data')['user_info']['user_id'];
        if (session()->get('b_user_data')['user_info']['user_id'] != '') $obj->created_by = session()->get('b_user_data')['user_info']['user_id'];
        if ($request->action == 'delete') {
            $obj->delete();
            return true;
        }
        $obj->save();
        if (isset($request->attachments)){
            foreach ($request->attachments as $key => $file) {
                if (isset($file)) {
                    $dir = publicPath('/uploads/pages/' . $obj->page_id);
                    $uuid = uniqidReal();
                    $ext = $file->getClientOriginalExtension();
                    $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . $uuid . '.' . $ext;
                    $file->move($dir, $fileName);
                    Page_image::create(['image_path' => $fileName, 'page_id' => $obj->page_id]);
                }
            }
        }
        return $obj;
    }

    public static function createOrUpdate($request){

        if ($request->page_id && $request->page_id != '')
            $obj = \App\Models\Pages::find(get_attr_by_enc_dec($request->page_id));
        else $obj = new P();
        if ($request->title != '') $obj->title = $request->title;
        if ($request->description != '') $obj->body = $request->description;
        if ($request->tenant_id != '') $obj->tenant_id = $request->tenant_id;
        if ('1' != '') $obj->created_by = '1';
        $obj->save();
        if (isset($request->attachments)){
            Page_image::where('page_id', $request->page_id)->delete();
            foreach ($request->attachments as $key => $file) {
                if (isset($file)) {
                    $dir = publicPath('/uploads/pages/' . $obj->page_id);
                    $uuid = uniqidReal();
                    $ext = $file->getClientOriginalExtension();
                    $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . $uuid . '.' . $ext;
                    $file->move($dir, $fileName);
                    Page_image::create(['image_path' => $fileName, 'page_id' => $obj->page_id]);
                }
            }
        }
        return $obj;
    }




    public static function  getAllPage()
    {
       $getallPages =   P::with('Pages_image')->get();
        return $getallPages;
    }

    public static function  getPageDetail($page_id)
    {
        $getallPages =   P::with('Pages_image')->find($page_id);
        return $getallPages;
    }


    public static function getpagesEdit($request , $single = false)
    {
        $pageEdit = P::with('Pages_image')->find(decrypt($request->page_id));
//            if ($request->page_id) $q->where('page_id', '=', $request->page_id);
//            if ($request->page_id) $q->find(decrypt($request->page_id));
//        })->get();
//        if ( isset($complain_types[0] )) return $complain_types[0];

        return $pageEdit;
    }



}
