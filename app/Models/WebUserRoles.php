<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebUserRoles extends Model
{
    protected $table = 'web_user_roles';
    protected $primaryKey = 'web_user_role_id';

    public function User() {
        return $this->belongsTo('\App\Models\WebUsers', 'web_user_id');
    }

    public function Role() {
        return $this->belongsTo('\App\Models\WebRoles', 'web_role_id');
    }

}
