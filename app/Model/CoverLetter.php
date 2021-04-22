<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    //
    protected $table="cover_letter";

    protected $fillable=[
        'user_id',
        'title',
        'description',
        'letter'
    ];

    public function user(){
        return $this->belongsTo(\App\User::class); 
    }
}
