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

        

    // {
    //     "id": 1,
    //     "police_name": "Priscilla Njeri",
    //     "reg_no": "ofc/3843/4958",
    //     "police_station_id": 8425,
    //     "phone_no": 722739203,
    //     "password": "jacob123"
    // }
    
    // Person a = new Person();
    // String name = a.name(); 
    public function register(Request $request){

        $newPoliceUser = PoliceUser::create([
            'police_name' => $request->police_name,   //"police_name": "Priscilla Njeri",
            'reg_no' => $request->reg_no,
            'police_station_id' => $request->police_station_id,
            'phone_no' => $request->phone_no,
            'password' => $request->password
        ]);


        // $newPoliceUser = new PoliceUser();
        // $newPoliceUser->police_name =  $request->police_name;
        // $newPoliceUser->reg_no = $request->reg_no;
        // $newPoliceUser->police_station_id = $request->police_station_id;
        // $newPoliceUser->phone_no = $request->phone_no;
        // $newPoliceUser->password = $request->password;

        // $newPoliceUser->save();

        return $newPoliceUser;
    }

}
