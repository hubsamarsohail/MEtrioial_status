<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    protected $table = 'user_images';
    protected $primaryKey = 'user_image_id';


    protected $fillable = ['image_path' , 'web_user_id'];
}
