<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FieldOfStudy extends Model
{
    //
    protected $table='field_of_study';
    protected $fillable=[
        'field_name',
    ];

    public function jobs(){
        return $this->hasOne(Job::class, 'field_of_study');
    }
}
