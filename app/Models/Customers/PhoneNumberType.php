<?php

namespace App\models\customers;

use Illuminate\Database\Eloquent\Model;

class PhoneNumberType extends Model
{
    protected $table = 'phone_number_types';

    public $timestamps = false;

    public function phoneNumbers()
    {
        return $this->hasMany('App\Models\Customers\PhoneNumber');
    }
}
