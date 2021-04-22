<?php

namespace App\Model\Resume\User;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //

    protected $table='resume_skills';

    protected $fillable=[
        'resume_id',
        'skill',
        'level'
    ];

    public function resume(){
        return $this->belongsTo(\App\Model\Resume::class); 
    }
}
