<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'brand',
        'slug',
        'thumbnail',
        'short_description',
        'description',
        'category_id',
        'price',
        'new_price',
        'availability',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function photos()
    {
        return $this->hasMany(ProductPhotoList::class, 'product_id');
    }

}
