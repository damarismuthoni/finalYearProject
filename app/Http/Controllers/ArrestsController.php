<?php

namespace App\Http\Controllers;

use App\Models\Arrests;
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

    $newArrests->citizens_id =  $request->citizens_id;
    $newArrests->police_station_id = $request->police_station_id;
    $newArrests->officer_reg_no = $request->officer_reg_no;
    $newArrests->category = $request->category;
    $newArrests->arrest_details = $request->arrest_details;
    $newArrests->arrest_location = $request->arrest_location;
    $newArrests->fine_amount = $request->fine_amount;
    $newArrests->fine_paid = $request->fine_paid;
    $newArrests->date_of_incident = $request->date_of_incident;

    $newArrests->save();

    return $newArrests;
    }

    public function get_arrests ( ){
    
    
        $arrests = Arrests::get();
    
        return view ('arrestslist', compact('arrests'));
    
    }
}