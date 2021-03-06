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
}
