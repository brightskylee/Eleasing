<?php

namespace App\Models\Inquiries;

use Illuminate\Database\Eloquent\Model;

class InquiryEvent extends Model
{
    protected $table = 'inquiry_labels';

    public $timestamps = false;

    public function inquiries(){
        return $this->belongsTo('App\Models\Inquiries\Inquiry');
    }
}
