<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function UserRoles() {
        return $this->hasMany('\App\Models\UsersRoles', 'user_id');
    }

    public function TenantUsers() {
        return $this->hasMany('\App\Models\TenantUsers', 'user_id');
    }
    public function Motorways() {
        return $this->hasMany('\App\Models\Motorways', 'created_by');
    }

    public function Plazas() {
        return $this->hasMany('\App\Models\Plazas', 'created_by');
    }
}
