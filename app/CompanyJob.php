<?php

namespace App;

use Faker\Provider\ar_JO\Company;
use Illuminate\Database\Eloquent\Model;

class CompanyJob extends Model
{
    public function company_profile(){
        return $this->belongsTo(CompanyProfile::class,'company_id','id');
    }
}
