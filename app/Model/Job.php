<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable=[
        'company_id', 
        'recruiting_manager_id',
        'title',
        'contract_type',
        'location',
        'head_count',
        'description',
        'level',
        'field_of_study',
        'experience',
        'age',
        'gender',
        'skills_required',
        'responsibilities',
        'salary',
        'benefits',
        'deadline',
        'maximum_applicants',
        'pipeline_id',
    ];

    public function company(){
        return $this->belongsTo(\App\Model\Company::class);
    }

    public function recruiters(){
        return $this->belongsToMany(\App\User::class, 'job_recruiter', 'job_id', 'recruiter_id');
    }

    public function recruitingManager(){
        return $this->hasOne(\App\User::class, 'id', 'recruiting_manager_id');
    }

    public function pipeline(){
        return $this->belongsTo(\App\Model\Pipeline::class);
    }

    public function field_of_study_table(){
        return $this->belongsTo(FieldOfStudy::class, 'field_of_study');
    }

    public function education_degree(){
        return $this->belongsTo(\App\Model\Level::Class, 'level');
    }
}
