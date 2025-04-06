<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at', // Add 'stock' or any new column
    ];

    // Relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
