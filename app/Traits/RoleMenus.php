<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Models\RoleMenus as RM;
use App\Constants\Constant, App\Constants\Messages;


trait RoleMenus
{

    public static function validateRoleMenus($request)
    {
        $validator = Validator::make($request->all(), [
            'role_id' => 'required',
            'menu_ids.*' => 'sometimes|required',
        ]);
        if ($validator->fails())
            return $validator;
        return false;
    }

    public static function getRoleMenus($request, $all = false, $distinct = false)
    {
        $records = RM::with(['Menu', 'Role', 'CreatedBy'])
            ->whereHas('Menu', function ($query) use ($request) {
                if ($request->is_active != '') $query->where('is_active', '=', $request->is_active);
                if ($request->parent_menu_id != '') $query->where('parent_menu_id', '=', $request->parent_menu_id);
                if ($request->s && $request->s != '') {
                    $query->orWhere('title', 'LIKE', '%' . $request->s . '%');
                    $query->orWhere('route', 'LIKE', '%' . $request->s . '%');
                }
            })
            ->whereHas('Role', function ($query) use ($request) {
                if ($request->r_id) $query->where('role_id', '=', $request->r_id);
                if ($request->role_ids) $query->whereIn('role_id', $request->role_ids);
            });
        if ($distinct) $records = $records->distinct()->get(['menu_id']);
        else if ($all) $records = $records->get();
        else
            $records = $records->paginate((isset($request->per_page) ? $request->per_page : 10));
        return $records;
    }

    public static function createOrUpdateOrDeleteRoleMenus($request)
    {
        RM::where('role_id', '=', decrypt($request->role_id))->delete();
        if (isset($request->menu_ids) && count($request->menu_ids) > 0) {
            foreach ($request->menu_ids as $menu_id) {
                $obj = new RM();
                $obj->role_id = decrypt($request->role_id);
                $obj->menu_id = $menu_id;
                $obj->created_by = get_user_id($request);
                $obj->save();
            }
        }
        return true;
    }

    public static function getUserRolesMenus($request, $user)
    {
        $user_roles = [];
        foreach ($user['UserRoles'] as $ur) $user_roles[] = $ur['Role']->role_id;
        $request->request->add(['is_active' => '1', 'role_ids' => $user_roles, 'parent_menu_id' => '0']);
        $role_menus = self::getRoleMenus($request, true, true);
        $GLOBALS['allowed_routes'] = [];
        $menus = self::getNthLevelMenus($role_menus);
        return $menus;
        
    }

    private static function getNthLevelMenus($role_menus, $menus = [])
    {
        foreach ($role_menus as $m) {
            if (isset($m['Menu']) && is_object($m['Menu'])) $m = $m['Menu'];
            if ($m->route != '') $GLOBALS['allowed_routes'][] = $m->route;
            $id = 'menu_' . $m->menu_id;
            if($m->display_menu == 1) $menus[$id] = ['menu_id' => $m->menu_id, 'title' => $m->title, 'route' => $m->route];
            if (count($m->ChildMenus)) $menus[$id] = self::getNthLevelMenus($m->ChildMenus, $menus[$id]);
        }
        return $menus;
    }

}
