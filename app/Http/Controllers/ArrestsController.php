<?php

namespace App\Http\Controllers;

use App\Models\Arrests;
use App\Models\PoliceStation;
use Illuminate\Http\Request;

class ArrestsController extends Controller
{
    //
    public function getArrests(){

        $arrests = Arrests::all(); 


        return $arrests;
    }

    // {
    //     "id": 1,
    //     "citizens_id": 78909,
    //     "police_station_id": 8412,
    //     "officer_reg_no": "ofc/3948/3049",
    //     "category": "non serious",
    //     "arrest_details": "taking a turn at wrong point of the road",
    //     "arrest_location": "harambee drive city centre",
    //     "fine_amount": 5000,
    //     "fine_paid": "Y",
    //     "date_of_incident": "2022-06-25"
    // }


   

        public function arrests (Request $request)

    {

     $newArrests = new Arrests();

    $newArrests->name =  $request->name;
    $newArrests->citizens_id =  $request->citizens_id;
    $newArrests->police_station_id = $request->police_station_id;
    $newArrests->arrest_details = $request->arrest_details;
    $newArrests->category = $request->category;
    $newArrests->date_of_incident = $request->date_of_incident;

    $newArrests->save();

    // return $newArrests;
    return $this->get_arrests();
    }

    // public function police_station()
    // {
    //     return $this->belongsTo(PoliceStation::class, 'police_station_id', 'id');
    // }

    
    public function get_arrests ( ){
    
    
        $arrests = Arrests::with('police_station', )->get();
        
        return view ('arrestslist', compact('arrests' ));
        
        // return $arrests;
    }


    public function new_arrests(){

        $policeStations = PoliceStation::all();
        return view('arrests_form' , compact('policeStations'));
    }

}