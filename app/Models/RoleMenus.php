<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleMenus extends Model
{
    protected $table = 'role_menus';
    protected $primaryKey = 'role_menu_id';

    public function CreatedBy() {
        return $this->belongsTo('App\Models\Users','created_by');
    }

    public function Menu() {
        return $this->belongsTo('App\Models\Menus','menu_id');
    }

    public function Role() {
        return $this->belongsTo('App\Models\Roles','role_id');
    }
}
