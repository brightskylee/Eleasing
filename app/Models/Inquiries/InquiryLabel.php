<?php

namespace App\Models\Inquiries;

use Illuminate\Database\Eloquent\Model;

class InquiryLabel extends Model
{
    protected $table = 'inquiry_labels';

    public $timestamps = false;

    public function inquiries()
    {
        return $this->belongsToMany('App\Models\Inquiries\Inquiry');
    }
}
