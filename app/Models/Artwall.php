<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artwall extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'exhibition_name',
        'artist',
        'title',
        'image_artist',
        'image_exhibition',
        'exhibition_short_des',
        'exhibition_long_des',
        'upcoming_title',
        'date',
        'slug',
    ];
}
