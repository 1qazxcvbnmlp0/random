<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // 'first_name', 'last_name'
    protected $fillable = [
       'name' , 'email', 'password', 'phone_number', 'phone_verified_at', 'profile_picture', 'status', 'sex', 'birthdate', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsToMany(\App\Model\Role::class); 
    }

    public function privilege(){
        return $this->belongsToMany(\App\Model\Privilege::class); 
    }

    public function isAdmin(){
        if($this->role->id == 1){
            return true; 
        }
        return false; 
    }

    public function isCompanyAgent(){
        if($this->role->id == 2){
            return true; 
        }
        return false; 
    }

    /*
        --------------------------------------------- Begin ------------------------------------------------------ 
        Use this code directly on the front end, not to display some section of codes. To allow company agents to view that page
    */ 

    public function isSuperAdmin(){
        if($this->privilege->id == 1 ){
            return true; 
        }
        return false; 
    }

    public function isHeadRecruiter(){
        if($this->privilege->id == 2 ){
            return true; 
        }
        return false; 
    }

    public function isRecruiter(){
        if($this->privilege->id == 3 ){
            return true; 
        }
        return false; 
    }

    public function isBrandingPageAdmin(){
        if($this->privilege->id == 4 ){
            return true; 
        }
        return false; 
    }

     /*
        --------------------------------------------- Begin ------------------------------------------------------ 
        Use this code directly on the front end, not to display some section of codes. To allow company agents to view that page
    */ 

  


    
}
