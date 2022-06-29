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


public function PoliceStation (Request $request)
{

 $newPoliceStation = new PoliceStation();

    $newPoliceStation->police_station_name = $request->police_station_name;
    $newPoliceStation->police_station_id = $request->police_station_id;
    $newPoliceStation->location = $request->location;
    $newPoliceStation->presiding_officer = $request->presiding_officer;
    

    $newPoliceStation->save();

    return $newPoliceStation;
}
}


//     "police_station_name": "Kabarnet Police Station",
//     "police_station_id": "8412",
//     "location": "Kitale",
//     "presiding_officer": "Susan Kyallo"