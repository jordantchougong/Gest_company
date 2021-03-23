<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'company_email',
        'company_logo',
        'company_web_site'       
    ];
}
