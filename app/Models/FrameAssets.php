<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrameAssets extends Model
{
    protected $fillable = [
        'name', 'picture', 'side', 'face', 'alt', 'wide', 'deep', 'pm',
    ];
}
