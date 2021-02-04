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

    
}
