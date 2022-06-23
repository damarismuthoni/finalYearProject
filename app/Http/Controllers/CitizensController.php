<?php

namespace App\Http\Controllers;

use App\Models\Citizens;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    //
    public function getCitizens(){

        $citizens = Citizens::all(); 


        return $citizens;
    }
}
