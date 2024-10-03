<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = "id_product";

    protected $fillable = [
        'name_product',
        'category_id',
        'price_product',
        'created_at',
        'updated_at', // Add 'stock' or any new column
    ];

    // Relationship with CategoryProduct
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class, 'category_id');
    }
}
