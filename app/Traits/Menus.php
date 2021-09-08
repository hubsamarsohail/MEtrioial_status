<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\Menus as M;
use App\Constants\Constant, App\Constants\Messages;


trait Menus
{

    public static function validateMenu($request)
    {
        $validator = Validator::make($request->all(), [
//            'parent_menu_id' => 'sometimes|nullable',
            'title' => 'required|max:25|unique:menus,title' . ($request->menu_id && $request->menu_id != '' ? ',' . decrypt($request->menu_id) . ',menu_id' : ''),
//            'route' => 'sometimes|nullable',
            'display_menu' => 'required|integer',
            'sort_order' => 'sometimes|required|integer',
            'is_active' => 'sometimes|required|integer',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getMenus($request, $single = false, $parent = false, $all = false)
    {

        $records = M::with('ChildMenus')->where(function ($q) use ($request, $single, $parent) {
            if ($request->is_active) $q->where('is_active', '=', $request->is_active);
            if ($parent) $q->where('parent_menu_id', '=', 0);
            if ($request->menu_id && $single == true) $q->where('menu_id', '=', decrypt($request->menu_id));
            if ($request->s && $request->s != '') {
                $q->where(function ($query) use ($request) {
                    $query->orWhere('title', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('route', 'LIKE', '%' . $request->s . '%');
                });
            }
        });

        if ($single) $records = $records->first();
        else if ($all) $records = $records->get();
        else $records = $records->orderBy('created_at', 'ASC')->paginate((isset($request->per_page) ? $request->per_page : 10));
        return $records;
    }

    public static function createOrUpdateOrDeleteMenu($request)
    {
        if ($request->menu_id != '') $obj = M::find(decrypt($request->menu_id));
        else $obj = new M();
        if ($request->title) $obj->title = $request->title;
        if ($request->parent_menu_id) $obj->parent_menu_id = $request->parent_menu_id;
        if ($request->route) $obj->route = $request->route;
        if ($request->display_menu != '') $obj->display_menu = $request->display_menu;
        if ($request->sort_order) $obj->sort_order = $request->sort_order;
        if ($request->is_active != '') $obj->is_active = $request->is_active;
        $obj->created_by = get_user_id($request);
        if ($request->action == 'delete') return $obj->delete();
        $obj->save();
        return $obj;
    }

}
