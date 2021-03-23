<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'empl_email',
        'empl_phone',
        'company_id'       
    ];
}
