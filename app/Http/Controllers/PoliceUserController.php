<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PoliceUser;
use Illuminate\Support\Facades\Validator;

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
        
        $validatedData = Validator::make($request->all(), [
            'police_name' => ['required'],
            'reg_no' => ['required', 'unique:police_users'],
            'police_station_id' => ['required','exists:police_station'],
            'phone_no' => ['required', 'unique:police_users'],
            'password' => ['required']
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'message' => 'Érror during validation',
                'data' => $validatedData->errors()
            ], 400);
        }


        
        $newPoliceUser = PoliceUser::create([
            'police_name' => $request->police_name,   //"police_name": "Priscilla Njeri",
            'reg_no' => $request->reg_no,
            'police_station_id' => $request->police_station_id,
            'phone_no' => $request->phone_no,
            'password' => bcrypt($request->password)
        ]);


         // If the new user was created successfully (the object is not null)
         if ($newPoliceUser == NULL) {
            return response()->json(['error' => 'Failed to create police user'], 401);
         }



        // Generate an authenticaton token which will log in the user
        $token = auth()->attempt([
            'reg_no' => $request->reg_no,
            'password' => $request->password
        ]);
        
        // If the token failed to generate, we should throw an error
        if ($token == NULL) {
            return response()->json(['error' => 'Failed to return auth token'], 401);
        }

        // Return the logged in user's token 
        return $this->createNewToken($token);
        



        // $newPoliceUser = new PoliceUser();
        // $newPoliceUser->police_name =  $request->police_name;
        // $newPoliceUser->reg_no = $request->reg_no;
        // $newPoliceUser->police_station_id = $request->police_station_id;
        // $newPoliceUser->phone_no = $request->phone_no;
        // $newPoliceUser->password = $request->password;

        // $newPoliceUser->save();

        return $newPoliceUser;
    }




    public function login(Request $request){
        $validatedData = Validator::make($request->all(), [
            'reg_no' => ['required', 'exists:police_users'],
            'password' => ['required']
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'message' => 'Érror during validation',
                'data' => $validatedData->errors()
            ], 400);
        }

        if (!$token = auth()->attempt($validatedData->validated())) {
            return response()->json(['error' => 'Invalid login credentials entered'], 401);
        }
        return $this->createNewToken($token);

    }





    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

}
