<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    protected $primaryKey = 'page_id';

    public function CreatedBy() {
        return $this->belongsTo('\App\Models\Users', 'user_id');
    }


    public function Pages_image() {
        return $this->hasMany('\App\Models\Page_image', 'page_id', 'page_id');
    }

}
