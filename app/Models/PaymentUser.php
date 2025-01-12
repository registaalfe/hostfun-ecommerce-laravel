<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentUser extends Model
{
    use HasFactory;

    const CREATED_AT = 'upload_date';
    const UPDATED_AT = 'updated_on';

    protected $fillable = [
        'transaction_id',
        'customer',
        'total',
        'upload_date',
        'updated_on',
    ];

    // Definisikan relasi ke tabel lain (jika ada)
    public function transaction()
    {
        return $this->belongsTo(Transactions::class, 'transaction_id');
    }
}
