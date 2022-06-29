<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrests extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table  = 'arrests';


protected $fillable = [

    'citizens_id',
    'police_station_id',
    'officer_reg_no',
    'category',
    'arrest_details',
    'arrest_location',
    'fine_amount', 
    'fine_paid',
    'date_of_incident'
];

}