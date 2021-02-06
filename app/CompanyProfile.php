<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    public function company_about(){
        return $this->hasOne(CompanyAbout::class, 'company_id', 'id');
    }
    public function company_benefit(){
        return $this->hasMany(CompanyBenefit::class, 'company_id', 'id');
    }
    public function company_job(){
        return $this->hasMany(CompanyJob::class, 'company_id', 'id');
    }
    public function company_location(){
        return $this->hasMany(CompanyLocation::class, 'company_id', 'id');
    }
    public function company_qanda(){
        return $this->hasMany(CompanyQandA::class, 'company_id', 'id');
    }
    public function company_review(){
        return $this->hasMany(CompanyJob::class, 'company_id', 'id');
    }

}
