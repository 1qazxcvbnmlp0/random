<?php

namespace App\Model\Resume\Company;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $table='company_resume_experience';

    protected $fillable=[
        'job_applicant_id',
        'job_title',
        'company',
        'start_date',
        'end_date',
        'city',
        'description'
    ];

    public function jobApplicant(){
        return $this->belongsTo(\App\Model\JobApplicant::class); 
    }
}
