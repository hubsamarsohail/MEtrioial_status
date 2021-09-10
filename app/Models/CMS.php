<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    protected $table = 'cms';
    protected $primaryKey = 'cms_id';

    public function CreatedBy() {
        return $this->belongsTo('\App\Models\Users', 'user_id');
    }

    public function CMSSliderImages() {
        return $this->hasMany('\App\Models\CMSSliderImages', 'cms_id');
    }

}
