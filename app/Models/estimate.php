<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estimate extends Model
{
    use HasFactory;
    protected $fillable = [
        'estimate_number',
        'client_name',
        'client_address',
        'estimate_date',
        'tax_rate',
        'items',
        'total',
        'notes',
    ];

    protected $dates = [
        'estimate_date',
    ];

    protected $casts = [
        'items' => 'array', // Cast items field to array
    ];
}
