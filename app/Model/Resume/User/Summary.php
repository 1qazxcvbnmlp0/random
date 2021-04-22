<?php

namespace App\Model\Resume\User;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    //

    protected $table='resume_summary';
    protected $fillable=[
        'resume_id',
        'summary'
    ];

    public function resume(){
        return $this->belongsTo(\App\Model\Resume::class); 
    }
}
