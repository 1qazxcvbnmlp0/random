<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable=['name'];

    public function user(){
        return $this->belongsToMany(\App\User::class); 
    }

    // public function privilege(){
    //     if(getRole()=='administrator'){
    //         return $this->belongsToMany(\App\AdminPrivilege::class); 
    //     }else if(getRole()=='recruiter'){
    //         return $this->belongsToMany(\App\RecruiterPrivilege::class); 
    //     }
       
    // }
    
    // public function getRole(){
    //     return Auth::user()->role; 
    // }
}
