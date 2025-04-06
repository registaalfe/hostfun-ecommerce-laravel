<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transactions;

class Transactions_Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'product_id',
        'qty',
        'price',
        'subtotal',
    ];

    // Relationship with Transactions
    public function transaction()
    {
        return $this->belongsTo(Transactions::class, 'transaction_id');
    }

    // Relationship with Product
    public function production()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
