<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizens extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table  = 'citizens';

    protected $fillable = [
        'citizen_name',
        'id_numner',
        'phone_number',
        'email_address'
    ];
}
