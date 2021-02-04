<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    //


    public function user(){
        return $this->belongsToMany(\App\User::class); 
    }
}
