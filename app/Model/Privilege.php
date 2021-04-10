<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    //
    protected $fillable=[
        'name'
    ];

    public function companyAgent(){
        return $this->hasMany(\App\Model\CompanyAgent::class); 
    }
}
