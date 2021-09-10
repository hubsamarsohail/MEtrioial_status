<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPermissions extends Model
{
    protected $table = 'menu_permissions';
    protected $primaryKey = 'menu_permission_id';

    public function Menu() {
        return $this->belongsTo('App\Models\Menus','menu_id');
    }

    public function User() {
        return $this->belongsTo('\App\Models\Users','user_id');
    }

}
