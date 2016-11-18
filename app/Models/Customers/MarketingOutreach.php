<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Model;

class MarketingOutreach extends Model
{

    protected $table = 'marketing_outreaches';

    public $timestamps = false;

    public function customers()
    {
        return $this->belongsToMany('App\Models\Customers\Customer');
    }
}
