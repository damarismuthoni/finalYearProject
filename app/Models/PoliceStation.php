<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table  = 'police_station';

    protected $fillable = [
        'police_station_name',
        'police_station_id',
        'location',
        'presiding officer'
    ];
}

