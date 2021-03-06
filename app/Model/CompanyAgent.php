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
}
