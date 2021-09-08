<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\Services as DM;
use Illuminate\Validation\Rule;
use App\Constants\API\Constant, App\Constants\API\Messages;


trait Services
{

    public static function validateService($request)
    {
        $validator = Validator::make($request->all(), [
            'tenant_id' => 'required|digits_between:1,20',
            'service_id' => 'sometimes|required|digits_between:1,20',
            'parent_service_id' => 'sometimes|required|digits_between:1,20',
            'is_active' => 'sometimes|required|integer|in:' . implode(',', array_values(Constant::isActive)),
            'title' => [
                'required',
                Rule::unique('services')->where(function ($query) use ($request) {
                    $qry = $query->where('title', $request->title);
                    $qry = $qry->where('tenant_id', $request->tenant_id);
                    if($request->parent_service_id)
                        $qry = $qry->where('parent_service_id', $request->parent_service_id);
                    return $qry;
                }),
            ],
            'img' => 'sometimes|required',
            'excerpt' => 'sometimes|required',
            'description' => 'sometimes|required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function validateServiceParams($request)
    {
        $data = [
            'tenant_id' => 'required|digits_between:1,20',
            'is_active' => 'sometimes|required|in:' . implode(',', array_values(Constant::isActive)),
            'service_id' => ($request->deleteService || $request->updateService ? '' : 'sometimes|') . 'required|digits_between:1,20',
            'parent_service_id' => 'sometimes|required|digits_between:1,20',
            'img' => 'sometimes|required',
            'excerpt' => 'sometimes|required',
            'description' => 'sometimes|required',
        ];
        if ($request->updateService) {
            $data['title'] = [
                'required',
                Rule::unique('services')->where(function ($query) use ($request) {
                    $qry = $query->where('title', $request->title);
                    $qry = $qry->where('tenant_id', $request->tenant_id);
                    if($request->parent_service_id)
                        $qry = $qry->where('parent_service_id', $request->parent_service_id);
                    return $qry;
                })->ignore(get_attr_by_enc_dec($request->service_id), 'service_id'),
            ];
        }
        $validator = Validator::make($request->all(), $data);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getServices($request, $all = false, $single = false)
    {
        $records = DM::where(function ($q) use ($request) {
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

    public static function createOrUpdateOrDeleteService($request)
    {
        if ($request->service_id && $request->service_id != '') {
            $obj = DM::find(get_attr_by_enc_dec($request->service_id));
            if (!$obj) return false;
        } else $obj = new DM();
        if($request->updateService || $request->deleteService) {
            if(isset($obj->tenant_id) && $obj->tenant_id != get_tenant_id($request))
                return false;
        }
        if ($request->action == 'delete') {
            if($obj->img) unlink_file('/uploads/services/'.$obj->service_id, $obj->img);
            return $obj->delete();
        }
        if ($request->title) $obj->title = $request->title;
        if ($request->excerpt) $obj->excerpt = $request->excerpt;
        if ($request->description) $obj->description = $request->description;
        if ($request->parent_service_id) $obj->parent_service_id = $request->parent_service_id;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        $obj->created_by = get_user_id($request);
        $obj->tenant_id = get_tenant_id($request);
        $obj->save();
        if(trim($request->img)) {
            if($img = upload_base64_img(trim($request->img), '/uploads/services/'.$obj->service_id)) {
                if($request->updateService) unlink_file('/uploads/services/'.$obj->service_id, $obj->img);
                $obj->img = $img;
                $obj->save();
            }
        }
        return $obj;
    }

    public static function prepareServiceData($Record)
    {
        $Record->makeHidden(['tenant_id']);
        $data = $Record->toArray();
        if($Record->img != '')
            $data['img'] = Constant::publicDirUrl.'uploads/services/'.$Record->service_id.'/'.$Record->img;
        return $data;
    }

    public static function prepareServicesData($Records)
    {
        $data = [];
        foreach ($Records as $Record)
            $data[] = self::prepareServiceData($Record);
        return $data;
    }

}
