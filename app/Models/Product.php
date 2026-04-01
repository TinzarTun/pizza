<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id',
        'category_id',
        'name',
        'description',
        'image',
        'price',
        'is_available',
        'view_count',
    ];
}
