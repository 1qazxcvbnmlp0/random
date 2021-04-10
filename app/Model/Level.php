<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    protected $table='level';

    protected $fillable=[
        'educational_level',
    ];

    public function jobs(){
        return $this->hasMany(\App\Model\Job::class, 'level');
    }
}
