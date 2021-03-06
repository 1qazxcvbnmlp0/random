<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    //
    protected $table='pipeline';

    protected $fillable=[
        'name',
        'company_id',
    ];

    public function company(){
        return $this->belongsTo(\App\Model\Company::class, 'company_id', 'id');
    }

    public function jobs(){
        return $this->hasMany(\App\Model\Job::class);
    }

}
