<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'category_product',
        'price_product',
        'created_at',
        'updated_at', // Add 'stock' or any new column
    ];
}
