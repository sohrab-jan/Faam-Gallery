<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Framing extends Model
{
    protected $fillable = [
        'frame_id',
        'user_id',
        'width',
        'height',
        'mount_board',
        'mount_color',
        'glass',
        'image',
        'printing_id',
        'price',
        'scale',
        'product_id',
    ];
}
