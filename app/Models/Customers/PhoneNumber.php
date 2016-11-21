<?php

namespace App\models\customers;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $table = 'phone_numbers';

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Models\Customers\Customer');
    }

    public function phoneNumberType()
    {
        return $this->hasOne('App\Models\Customers\PhoneNumberType');
    }
}
