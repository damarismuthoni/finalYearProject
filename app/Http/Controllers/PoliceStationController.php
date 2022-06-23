<?php

namespace App\Http\Controllers;

use App\Models\PoliceStation;
use Illuminate\Http\Request;

class PoliceStationController extends Controller
{
    //
    public function getPoliceStation(){

        $policeStation = PoliceStation::all(); 


        return $policeStation;

}
}