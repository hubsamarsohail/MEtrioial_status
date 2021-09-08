<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    protected $table = 'user_roles';
    protected $primaryKey = 'user_role_id';

    public function User() {
        return $this->belongsTo('\App\Models\Users', 'user_id');
    }

    public function Role() {
        return $this->belongsTo('\App\Models\Roles', 'role_id');
    }

}
