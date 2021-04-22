<?php

namespace App\Model\Resume\User;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //

    protected $table='resume_experience';

    protected $fillable=[
        'resume_id',
        'job_title',
        'company',
        'start_date',
        'end_date',
        'city',
        'description'
    ];

    public function resume(){
        return $this->belongsTo(\App\Model\Resume::class); 
    }
}
