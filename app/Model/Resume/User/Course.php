<?php

namespace App\Model\Resume\User;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $table='resume_courses';

    protected $fillable=[
        'resume_id',
        'course',
        'institute',
        'start_date',
        'end_date'
    ];

    public function resume(){
        return $this->belongsTo(\App\Model\Resume::class); 
    }
}
