<?php

namespace App\Http\Controllers;

use App\Models\Abstracts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbstractsController extends Controller
{
    //
    public function getAbstracts(){

        // Using an ORM
        $abstracts = Abstracts::all();  
        return $abstracts;
        
        // Using a Query builder
        $abstracts_from_query = DB::table('abstracts')->select(['citizen_id', 'details'])->get();
        // return $abstracts_from_query;

        
    }

public function abstracts (Request $request)
{

 $newAbstracts = new Abstracts();

    $newAbstracts->police_station_id = $request->police_station_id;
    $newAbstracts->police_id = $request->police_id;
    $newAbstracts->citizen_id = $request->citizen_id;
    $newAbstracts->abstract_reference_no = $request->abstract_reference_no;
    $newAbstracts->details = $request->details;
    $newAbstracts->category_id = $request->category_id;
    $newAbstracts->date_of_incident = $request->date_of_incident;
    

    $newAbstracts->save();

    return $newAbstracts;
}
public function get_abstracts ( ){
    
    // select * from abstracts;
    $abstracts = Abstracts::with('police_station')->get();
    // return $abstracts;


    return view ('abstractlist', compact('abstracts'));

}
}

// {
//     "police_station_id": 8223,
//     "police_name_id": 1,
//     "citizen_id": 49304,
//     "abstact_reference_no": "dsw/293/2020",
//     "details": "stolen phone near afya center by an individual wearing a black jacket",
//     "category_id": "5400",
//     "date_of_incident": "2020-06-24"
//   },