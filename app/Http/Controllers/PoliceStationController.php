<?php

namespace App\Http\Controllers;

use App\Models\Abstracts;
use App\Models\Arrests;
use App\Models\Payment;
use App\Models\PoliceStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


public function displayReport(){
    $abstracts = Abstracts::with('police_station')->orderBy('id', 'DESC')->limit(5)->get();


    $totalAbstracts = Abstracts::all()->count();
    $totalArrests = Arrests::all()->count();
    $totalPayments = DB::select("SELECT SUM(amount_paid) as total_amount FROM payment")[0]->total_amount;
    $arrestsToday = Arrests::where('created_at', '>=', now()->startOfDay()->toDateTimeString())->get()->count();


    $statistics = [
        'abstracts' => $totalAbstracts,
        'arrests' => $totalArrests,
        'payments' => $totalPayments,
        'arrests_today' => $arrestsToday
    ];

    $locationAbstracts = DB::select(DB::raw('SELECT police_station.location, COUNT(*) AS abstracts FROM police_station
    INNER JOIN abstracts ON police_station.id = abstracts.police_station_id
    GROUP BY location
    '));

    $monthlyArrests = DB::select(DB::raw("SELECT DATE_FORMAT(date_of_incident, '%M' ) AS month, 
    COUNT(*) AS arrests
     FROM police_station
    INNER JOIN arrests ON police_station.id = arrests.police_station_id
    GROUP BY DATE_FORMAT(date_of_incident, '%M' )
    "));
    

    // return $abstracts;
    return view('police-station', compact('abstracts', 'statistics', 'locationAbstracts', 'monthlyArrests'));
}
}


//     "police_station_name": "Kabarnet Police Station",
//     "police_station_id": "8412",
//     "location": "Kitale",
//     "presiding_officer": "Susan Kyallo"