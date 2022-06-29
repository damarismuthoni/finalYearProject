<?php

namespace App\Http\Controllers;

use App\Models\Arrests;
use App\Models\Citizens;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    //
    public function getCitizens(){

        $citizens = Citizens::all(); 


        return $citizens;
    }

   
    public function citizens (Request $request)
    {

     $newCitizens = new Citizens();
  
        $newCitizens->citizen_name = $request->citizen_name;
        $newCitizens->id_number = $request->id_number;
        $newCitizens->phone_number = $request->phone_number;
        $newCitizens->email_address = $request->email_address;
        

        $newCitizens->save();

        return $newCitizens;
    }
}
