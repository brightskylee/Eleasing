<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $table = 'schools';

    public $timestamps = false;

    public function customers()
    {
        return $this->belongsToMany('App\Models\Customers\Customer');
    }
}
