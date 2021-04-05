<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyAgent extends Model
{
    //

    protected $table='company_agents';
    protected $fillable=[
        'user_id',
        'company_id',
        'privilege_id',
    ];

    public function user(){
        return $this->belongsTo(\App\User::class, 'user_id');
    }
    public function company(){
        return $this->belongsTo(\App\Model\Company::class, 'company_id');
    }
    public function privilege(){
        return $this->belongsTo(\App\Model\Privilege::class, 'privilege_id' );
    }
}
