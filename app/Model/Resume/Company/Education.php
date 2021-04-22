<?php

namespace App\Model\Resume\Company;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table='company_resume_education';

    protected $fillable=[
        'job_applicant_id',
        'school',
        'education_level',
        'field_of_study',
        'city',
        'start_date',
        'end_date',
    ];

    public function jobApplicant(){
        return $this->belongsTo(\App\Model\JobApplicant::class); 
    }
}
