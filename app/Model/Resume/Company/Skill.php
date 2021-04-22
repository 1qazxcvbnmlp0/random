<?php

namespace App\Model\Resume\Company;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $table='company_resume_skills';

    protected $fillable=[
        'job_applicant_id',
        'skill',
        'level'
    ];

    public function jobApplicant(){
        return $this->belongsTo(\App\Model\JobApplicant::class); 
    }
}
