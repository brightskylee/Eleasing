<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{


    protected $table = 'organizations';

    public $timestamps = false;

    public function customers()
    {
        return $this->belongsToMany('App\Models\Customers\Customer');
    }
}
