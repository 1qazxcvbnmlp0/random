<?php

namespace App\Model\Resume\Company;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table='company_resume_courses';

    protected $fillable=[
        'job_applicant_id',
        'course',
        'institute',
        'start_date',
        'end_date'
    ];

    public function jobApplicant(){
        return $this->belongsTo(\App\Model\JobApplicant::class); 
    }
}
