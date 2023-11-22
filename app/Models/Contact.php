<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'company_name',
        'service_name',
        'city',
        'artist',
        'collector',
        'message',
    ];
}
