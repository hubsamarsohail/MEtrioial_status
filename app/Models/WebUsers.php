<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebUsers extends Model
{
    protected $table = 'web_users';
    protected $primaryKey = 'web_user_id';
        protected $fillable = ['is_active', 'device_token'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function WebUserRoles() {
        return $this->hasMany('\App\Models\WebUserRoles', 'web_user_id');
    }

    public function profileFavourite() {
        return $this->belongsToMany('App\Models\Profile', 'my_favourites' , 'web_user_id', 'user_profile_id');
    }

//    public function UserReports() {
//        return $this->belongsToMany('App\Models\WebUsers', 'complains' , 'from_user_id', 'to_user_id');
//    }


    public function ParentChild() {
        return $this->belongsToMany('App\Models\WebUsers', 'parent_childs' , 'parent_id', 'child_id');
    }


}
