<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'client_name',
        'client_address',
        'invoice_date',
        'tax_rate',
        'total',
        'items',
    ];

    protected $dates = [
        'invoice_date',
    ];

    protected $casts = [
        'items' => 'array', // Cast items field to array
    ];
}
