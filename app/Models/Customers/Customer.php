<?php

namespace App\Models\Customers;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";


    public function inquiries()
    {
        return $this->hasMany('App\Models\Customers\Inquiry');
    }

    public function customerPreferences()
    {
        return $this->belongsToMany('App\Models\Customers\CustomerPreference');
    }

    public function marketingOutreaches()
    {
        return $this->belongsToMany('App\Models\Customers\MarketingOutreach');
    }

    public function brandExposures()
    {
        return $this->belongsToMany('App\Models\Customers\BrandExposure');
    }

    public function schools()
    {
        return $this->belongsToMany('App\Models\Customers\School');
    }

    public function organizations()
    {
        return $this->belongsToMany('App\Models\Customers\Organization');
    }


}
