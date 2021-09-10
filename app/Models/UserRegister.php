<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    protected $table = 'user_registration';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'u_password',
    ];

    public function UserRoles() {
        return $this->hasMany('\App\Models\UsersRoles', 'user_id');
    }

    public function TenantUsers() {
        return $this->hasMany('\App\Models\TenantUsers', 'user_id');
    }

}
