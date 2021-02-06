<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyReview extends Model
{
    public function company_profile(){
        return $this->belongsTo(CompanyProfile::class,'company_id','id');
    }
}
