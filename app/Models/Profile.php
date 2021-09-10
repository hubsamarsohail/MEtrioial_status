<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'user_profiles';
    protected $primaryKey = 'user_profile_id';

    public function scopeMatcher($query)
    {
        return $query->where('types', '1');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function Country() {
        return $this->belongsTo('App\Models\Country', 'country_id' , 'country_id');
    }
    public function Imagesdata() {
        return $this->hasMany('App\Models\UserImage', 'web_user_id' , 'web_user_id');
    }

    public function City() {
        return $this->belongsTo('App\Models\Country', 'city_id' , 'city_id ');
    }

    public function users() {
        return $this->belongsTo('App\Models\WebUsers', 'web_user_id' , 'web_user_id');
    }

    public function userFavourite() {
        return $this->belongsToMany('App\Models\WebUsers', 'my_favourites' , 'web_user_id' , 'web_user_id');
    }







}
