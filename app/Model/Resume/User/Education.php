<?php

namespace App\Model\Resume\User;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table='resume_education';

    protected $fillable=[
        'resume_id',
        'school',
        'education_level',
        'field_of_study',
        'city',
        'start_date',
        'end_date'
    ];

    public function resume(){
        return $this->belongsTo(\App\Model\Resume::class); 
    }
}
