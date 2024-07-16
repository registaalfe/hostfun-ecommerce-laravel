<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        // Add other fields here that you want to be mass assignable
    ];
}
