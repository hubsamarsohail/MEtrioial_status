<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';

    public function CreatedBy() {
        return $this->belongsTo('\App\Models\Users','created_by');
    }

    public function ChildMenus() {
        return $this->hasMany('\App\Models\Menus','parent_menu_id');
    }

    public function RoleMenus() {
        return $this->hasMany('\App\Models\RoleMenus','menu_id');
    }
}
