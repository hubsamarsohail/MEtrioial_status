<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenantUsers extends Model
{
    protected $table = 'tenant_users';
    protected $primaryKey = 'tenant_user_id';

    public function User() {
        return $this->belongsTo('\App\Models\Users', 'user_id');
    }

    public function Tenant() {
        return $this->belongsTo('\App\Models\Tenants', 'tenant_id');
    }

}
