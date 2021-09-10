<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    protected $table = 'tenants';
    protected $primaryKey = 'tenant_id';


    public function TenantUsers() {
        return $this->hasMany('\App\Models\TenantUsers', 'tenant_id');
    }

    public function Motorways() {
        return $this->hasMany('\App\Models\Motorways', 'tenant_id');
    }

}
