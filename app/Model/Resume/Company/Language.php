<?php

namespace App\Model\Resume\Company;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $table='company_resume_languages';

    protected $fillable=[
        'job_applicant_id',
        'language',
        'level'
    ];

    public function jobApplicant(){
        return $this->belongsTo(\App\Model\JobApplicant::class); 
    }
}
