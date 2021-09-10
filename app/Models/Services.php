<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'service_id';

    public function CreatedBy() {
        return $this->belongsTo('\App\Models\Users', 'user_id');
    }

}
