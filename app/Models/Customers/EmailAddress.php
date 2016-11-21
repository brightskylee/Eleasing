<?php

namespace App\models\customers;

use Illuminate\Database\Eloquent\Model;

class EmailAddress extends Model
{
    protected $table = 'email_addresses';

    public $timestamps = false;

    public function customers()
    {
        return $this->belongsTo('App\Models\Customers\Customer');
    }

    public function emailAddressType()
    {
        return $this->hasOne('App\Models\Customers\EmailAddressType');
    }
}
