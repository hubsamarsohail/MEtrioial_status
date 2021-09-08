<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'role_id';

    public function UserRoles() {
        return $this->hasMany('\App\Models\UsersRoles', 'role_id');
    }

    public function RoleMenus() {
        return $this->hasMany('\App\Models\RoleMenus', 'role_id');
    }

}
