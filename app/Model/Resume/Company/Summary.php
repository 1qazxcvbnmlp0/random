<?php

namespace App\Model\Resume\Company;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    //
    protected $table='company_resume_summary';

    protected $fillable=[
        'job_applicant_id',
        'summary'
    ];

    public function jobApplicant(){
        return $this->belongsTo(\App\Model\JobApplicant::class); 
    }
}
