<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMSSliderImages extends Model
{
    protected $table = 'cms_slider_images';
    protected $primaryKey = 'cms_slider_image_id';

    public function CreatedBy() {
        return $this->belongsTo('\App\Models\Users', 'user_id');
    }

    public function CMS() {
        return $this->belongsTo('\App\Models\CMS', 'cms_id');
    }

}
