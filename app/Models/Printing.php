<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printing extends Model
{
    protected $fillable = [
        'frame_id',
        'printing_id',
        'user_id',
        'width',
        'height',
        'price',
        'frame',
        'image',
        'paper',
    ];
}
