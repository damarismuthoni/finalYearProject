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
}