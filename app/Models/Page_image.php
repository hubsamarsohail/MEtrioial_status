<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_image extends Model
{
    protected $table = 'page_images';
    protected $primaryKey = 'page_image_id';

    protected $fillable =['image_path', 'page_id'];
}
