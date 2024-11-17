<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    const CREATED_AT = 'transaction_date';
    const UPDATED_AT = 'updated_on';

    protected $fillable = [
        'no_invoice',
        'customer_id',
        'total_amount',
        'transaction_date',
        'status',
    ];
}
