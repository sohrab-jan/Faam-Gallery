<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'comment',
        'email',
        'title',
        'description',
        'website',
        'image_blog',
        'user_id',
    ];
}
