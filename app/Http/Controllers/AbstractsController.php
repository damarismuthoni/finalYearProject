<?php

namespace App\Http\Controllers;

use App\Models\Abstracts;
use App\Models\PoliceStation;
use App\Models\PoliceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbstractsController extends Controller
{
    //
    public function getAbstracts(Request $request){
        
        // Using an ORM
        $abstracts = Abstracts::all();  
        return $abstracts;
        
        // Using a Query builder
        $abstracts_from_query = DB::table('abstracts')->select(['citizen_id', 'details'])->get();
        // return $abstracts_from_query;

        
    }

public function saveAbstracts (Request $request)
{

    if($request->id){
        $newAbstracts = Abstracts::find($request->id);
    } else {
        $newAbstracts = new Abstracts();
    }
    

    $newAbstracts->name_of_complainant = $request->name_of_complainant;
    $newAbstracts->citizen_id = $request->citizen_id;
    $newAbstracts->details = $request->details;
    $newAbstracts->telephone_number = $request->telephone_number;
    $newAbstracts->date_of_incident = $request->date_of_incident;
    $newAbstracts->received_by = $request->received_by;
    $newAbstracts->abstract_reference_no = 
        $this->generateRandomString(4, 'number') . "/" . $this->generateRandomString(4, 'string') . "/" . now()->year;
    $newAbstracts->police_station_id = $request->police_station_id;
    $newAbstracts->police_note = $request->police_note;
    $newAbstracts->status = $request->status;
    

    $newAbstracts->save();

    return $this->get_abstracts($request);
}



public function get_abstracts (Request $request){
    $searchTerm = $request->search_term;
        
       
    if($searchTerm != ""){
        $abstracts = Abstracts::with('police_station', 'police')->where('name_of_complainant', 'LIKE', "%$searchTerm%")->get();  
    } else {
        $abstracts = Abstracts::with('police_station', 'police')->get();  
    }

    
    // select * from abstracts;
    // $abstracts = Abstracts::with('police_station', 'police')->get();

    return view ('abstractlist', compact('abstracts', 'searchTerm'));

}
public function new_abstract(){
    $policeNames = PoliceUser::all();

    $policeStations = PoliceStation::all();

    return view('abstract_form', compact('policeNames', 'policeStations'));
}




public function edit_abstract($id){
    $policeNames = PoliceUser::all();

    $policeStations = PoliceStation::all();
    $abstract = Abstracts::find($id);

    return view('abstract_form', compact('policeNames', 'policeStations', 'abstract'));
}



public function generateRandomString($length, $type) {
    $characters = $type == 'number' ? '0123456789' : 'abcdefghijklmnopqrstuvwxyz';
   
    // if($type == 'number'){
    //     $characters = '0123456789';
    // } else {
    //     $characters = 'abcdefghijklmnopqrstuvwxyz';
    // }

    
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
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