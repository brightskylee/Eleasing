<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Model;

class BrandExposure extends Model
{
    protected $table = "brand_exposures";

    public $timestamps = false;

    public function customers()
    {
        return $this->belongsToMany('App\Models\Customers\Customer');
    }
}
