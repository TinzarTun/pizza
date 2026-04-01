<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'cart_id',
        'user_id',
        'product_id',
        'size',
        'toppings',
        'user_note',
        'quantity',
    ];

    protected $casts = [
        'toppings' => 'array',
    ];
}
