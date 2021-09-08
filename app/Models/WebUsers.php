<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class WebUsers extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'web_users';
    protected $primaryKey = 'web_user_id';
    protected $fillable = ['is_active', 'device_token'];


    protected $hidden = [
        'password',
    ];
    public function WebUserRoles() {
        return $this->hasMany('\App\Models\WebUserRoles', 'web_user_id');
    }
    public function profileFavourite() {
        return $this->belongsToMany('App\Models\Profile', 'my_favourites' , 'web_user_id', 'user_profile_id');
    }
    public function ParentChild() {
        return $this->belongsToMany('App\Models\WebUsers', 'parent_childs' , 'parent_id', 'child_id');
    }

    public function userprofilelogs() {
        return $this->belongsToMany('App\Models\Profile', 'profile_logs' , 'web_user_id' , 'user_profile_id');
    }
}
