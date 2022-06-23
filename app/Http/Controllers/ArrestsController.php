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

}
