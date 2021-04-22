<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //
    protected $table="resume"; 

    protected $fillable=[
        'user_id',
        'title',
        'description'
    ];

    public function user(){
        return $this->belongsTo(\App\User::class); 
    }

    public function experiences(){
        return $this->hasMany(\App\Model\Resume\User\Experience::class); 
    }

    public function educations(){
        return $this->hasMany(\App\Model\Resume\User\Education::class); 
    }

    public function courses(){
        return $this->hasMany(\App\Model\Resume\User\Course::class); 
    }

    public function languages(){
        return $this->hasMany(\App\Model\Resume\User\Language::class); 
    }

    public function skills(){
        return $this->hasMany(\App\Model\Resume\User\Skill::class); 
    }

    public function summary(){
        return $this->hasOne(\App\Model\Resume\User\Summary::class); 
    }
}
