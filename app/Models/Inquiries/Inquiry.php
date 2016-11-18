<?php

namespace App\Models\Inquiries;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{

    protected $table = 'inquiries';

    public function customers()
    {
        return $this->belongsTo('App\Models\Customers\Customer');
    }

    public function inquiryClassifiers()
    {
        return $this->belongsToMany('App\Models\Inquiries\InquiryClassifier');
    }

    public function inquiryTypes()
    {
        return $this->belongsTo('App\Models\Inquiries\InquiryType');
    }

    public function inquiryLabels()
    {
        return $this->belongsToMany('App\Models\Inquiries\InquiryLabels');
    }

    public function inquiryEvents()
    {
        return $this->hasMany('App\Models\Inquiries\InquiryEvent');
    }


}
