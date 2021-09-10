<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\Complain_type as ComplainTp;
use phpDocumentor\Reflection\Types\True_;
use function React\Promise\all;


trait ComplainType
{

    public static function validateComplainType($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getComplains($request)
    {
        $complain_types = ComplainTp::where('is_active', '1')->get();
        return $complain_types;
    }

    public static function createOrUpdateOrDeleteRole($request)
    {
        if ($request->complain_tye_id  && $request->complain_tye_id  != '') $obj = ComplainTp::find(decrypt($request->complain_tye_id ));
        else $obj = new ComplainTp();
        if ($request->name) $obj->name = $request->name;
        if ($request->is_active) $obj->is_active = $request->is_active;
        if ($request->action == 'delete') {
            $obj->delete();
            return true;
        }
        $obj->save();
        return $obj;
    }

        public static function getCompalinTypes($request)
    {
        $complain_types = ComplainTp::where(function ($q) use ($request) {
            if ($request->is_active) $q->where('is_active', '=', $request->is_active);
            if ($request->complain_tye_id && $single = true ) $q->where('complain_tye_id', '=', decrypt($request->complain_tye_id));
        })->paginate(10);
//        if ( $single = true &&  isset($complain_types[0] )) return $complain_types[0];
        return $complain_types;
    }

    public static function getCompalinTypeEdit($request , $single = false)
    {
        $complain_types = ComplainTp::where(function ($q) use ($request) {
            if ($request->is_active) $q->where('is_active', '=', $request->is_active);
            if ($request->complain_tye_id) $q->where('complain_tye_id', '=', decrypt($request->complain_tye_id));
        })->get();
        if ( isset($complain_types[0] )) return $complain_types[0];
        return $complain_types;
    }







}
