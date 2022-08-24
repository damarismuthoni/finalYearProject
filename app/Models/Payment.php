<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table  = 'payment';

    protected $fillable = [
        'name',
        'id_number',
        'amount_paid',
        'for',
        'receipt_number'
    ];
}

