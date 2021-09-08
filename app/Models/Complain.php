<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $table = 'complains';
    protected $primaryKey = 'complain_id';

    protected $fillable = ['description', 'complain_type_id', 'user_profile_id', 'from_user_id'];

    public function to_users() {
        return $this->belongsTo('App\Models\Profile', 'user_profile_id' , 'user_profile_id');
    }
    public function from_user() {
        return $this->belongsTo('App\Models\WebUsers', 'from_user_id' , 'web_user_id');
    }

    public function complain_type() {
        return $this->belongsTo('App\Models\Complain_type', 'complain_type_id' , 'complain_tye_id');
    }
}
