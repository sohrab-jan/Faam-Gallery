<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name',
        'artist_id',
        'size',
        'width',
        'height',
        'product_short_des',
        'product_long_des',
        'price',
        'category_id',
        'image',
        'slug',
        'quantity',
    ];

    protected $appends = [
        'in_stock',
    ];

    public function getInStockAttribute(): bool
    {
        return $this->attributes['quantity'] >= 1 ? true : false;
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
