<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function getUsers(){

        $users = Users::all(); 


        return $users;
    }

}
