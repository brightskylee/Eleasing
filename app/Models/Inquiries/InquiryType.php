<?php

namespace App\Models\Inquiries;

use Illuminate\Database\Eloquent\Model;

class InquiryType extends Model
{
    protected $table = "inquiry_types";

    public $timestamps = false;

    public function inquiries()
    {
        return $this->hasMany('App\Models\Inquiries\Inquiry');
    }
}
