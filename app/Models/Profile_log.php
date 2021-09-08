<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_log extends Model
{
    protected $table = 'profile_logs';
    protected $primaryKey = 'profile_log_id';



    public function profile_logs() {
        return $this->hasMany('App\Models\Profile', 'user_profile_id' , 'user_profile_id');
    }

    public function profile_user_logs() {
        return $this->hasMany('App\Models\WebUsers', 'web_user_id' , 'web_user_id');
    }
}
