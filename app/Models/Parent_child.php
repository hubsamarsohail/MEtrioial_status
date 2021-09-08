<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent_child extends Model
{
    protected $table ="parent_childs";
    protected $primaryKey = "parent_child_id";

    protected $fillable = ['is_active'];

    public function parentRequest() {
        return $this->belongsTo('App\Models\Profile', 'parent_id' , 'web_user_id');
    }

    public function parentusers() {
        return $this->belongsTo('App\Models\WebUsers', 'parent_id' , 'web_user_id');
    }
    public function childusers() {
        return $this->belongsTo('App\Models\WebUsers', 'child_id' , 'web_user_id');
    }

    public function ParentChildrelation() {
        return $this->belongsTo('App\Models\Profile', 'child_id', 'web_user_id');
    }



}
