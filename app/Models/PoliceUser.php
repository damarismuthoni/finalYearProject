<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceUser extends Model
{


    
    use HasFactory;


    // it will look for a table called police_users
    protected $table  = 'police_users';
}
