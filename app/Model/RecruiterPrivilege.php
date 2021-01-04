<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RecruiterPrivilege extends Model
{
    //
    protected $fillable=['name'];

    // public function user(){
    //     return $this->belongsToMany(\App\User::class); 
    // }

    // public function role(){
    //     return $this->belongsToMany(\App\Role::class); 
    // }
}
