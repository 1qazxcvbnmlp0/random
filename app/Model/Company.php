<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    //

    protected $fillable=[
        'company_name',
        'industry_type',
        'super_admin_id',
    ];

    public function superAdmin(){
        // The super admin email and password, all the other informations are inside the Users table. 
        return $this->hasOne(\App\User::class, 'id' , 'super_admin_id');
    }

    public function agentPrivilege(){
        return $this->belongsToMany(\App\Model\Privilege::class, 'company_agents', 'company_id', 'privilege_id');
    }

    public function agents(){
        return $this->belongsToMany(\App\User::class, 'company_agents', 'company_id', 'user_id');
    }

    public function jobs(){
        return $this->hasMany(\App\Model\Job::class, 'company_id', 'id'); 
    }

    public function pipeline(){
        return $this->hasMany(\App\Model\Pipeline::class);
    }

}
