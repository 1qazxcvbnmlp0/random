<?php

namespace App\Model\Resume\User;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //

    protected $table='resume_languages';

    protected $fillable=[
        'resume_id',
        'language',
        'level'
    ];

    public function resume(){
        return $this->belongsTo(\App\Model\Resume::class); 
    }
}
