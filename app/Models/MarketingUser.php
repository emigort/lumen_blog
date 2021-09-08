<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketingUser extends Model
{
    protected $table='marketing_user';
    protected $fillable =[
        'email',
        'first_name',
        'last_name',
        'opt-in'
    ];
}
