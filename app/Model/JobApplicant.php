<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    //

    protected $table="job_applicant";

    protected $fillable=[
        'job_id',
        'user_id',
        // 'resume_id',
        'cover_letter'
    ];

    public function user(){
        return $this->belongsTo(\App\User::class, "user_id"); 
    }

    public function jobDetail(){
        return $this->belongsTo(\App\Model\Job::class, "job_id");
    }

    public function courses(){
        return $this->hasMany(\App\Model\Resume\Company\Course::class);
    }

    public function educations(){
        return $this->hasMany(\App\Model\Resume\Company\Education::class);
    }

    public function experiences(){
        return $this->hasMany(\App\Model\Resume\Company\Experience::class);
    }

    public function languages(){
        return $this->hasMany(\App\Model\Resume\Company\Language::class);
    }

    public function skills(){
        return $this->hasMany(\App\Model\Resume\Company\Skill::class);
    }
    public function summary(){
        return $this->hasOne(\App\Model\Resume\Company\Summary::class);
    }
}
