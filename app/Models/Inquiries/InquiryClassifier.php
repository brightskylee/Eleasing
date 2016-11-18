<?php

namespace App\Models\Inquiries;

use Illuminate\Database\Eloquent\Model;

class InquiryClassifier extends Model
{
    protected $table = 'inquiry_classifiers';

    public $timestamps = false;

    public function inquiries()
    {
        return $this->belongsToMany('App\Models\Inquiries\Inquiry');
    }
}
