<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PoliceUser;

class PoliceUserController extends Controller
{
    
    public function getPoliceUsers(){

        $policeUsers = PoliceUser::all(); 


        return $policeUsers;
    }

}
