<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebRoles extends Model
{
    protected $table = 'web_roles';
    protected $primaryKey = 'web_role_id';

    public function WebUserRoles() {

        return $this->hasMany('\App\Models\WebUserRoles', 'web_role_id');
    }


}
