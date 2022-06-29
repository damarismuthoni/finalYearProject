<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abstracts extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table  = 'abstracts';

    protected $fillable = [
        'police_station_id',
        'police_id',
        'citizen_id',
        'abstract_refernce_no',
        'details',
        'category_id',
        'date of incident'
    ];
}

