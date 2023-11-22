<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'subcategory_name',
        'category_id',
        'category_name',
        'slug',
    ];
}
