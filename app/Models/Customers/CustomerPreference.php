<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Model;

class CustomerPreference extends Model
{
    protected $table = 'customer_preferences';

    public $timestamps = false;

    public function customers()
    {
        return $this->belongsTo('App\Models\Customers\Customer');
    }
}
