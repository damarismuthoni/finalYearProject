<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PoliceUser;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

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
            'police_station_id' => ['required'],
            'phone_no' => ['required', 'unique:police_users','max:10','min:10'],
            'password' => ['required']
        ]);

        if ($validatedData->fails()) {
            $errors =  $validatedData->errors();
            $message = "Ërror During Login";

            // If the Laravel Validation fails:
            //      - Go back to the log in page, but pass the $errors and $message variable above
            return view('register', compact('errors', 'message'));
            
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



        // Generate an authenticaton token which will log in the user....at the same time generating an authentication token
        $loggedIn = auth()->attempt([
            'reg_no' => $request->reg_no,
            'password' => $request->password
        ]);

        // If the token failed to generate, we should throw an error
        if (!$loggedIn) {
            return response()->json(['error' => 'Failed to return auth token'], 401);
        }

        // Return the logged in user's token 
        // return $this->createNewToken($token);
        
        session(['user' => $newPoliceUser]);

       
        return redirect('/homepage');

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
            $errors =  $validatedData->errors();
            $message = "Ërror During Login";

            // If the Laravel Validation fails:
            //      - Go back to the log in page, but pass the $errors and $message variable above
            return view('login', compact('errors', 'message'));
            
        }


        
        // Generate an authenticaton token which will log in the user....at the same time generating an authentication token
        $loggedIn = auth()->attempt($validatedData->validated());

        // If the token failed to generate, we should throw an error
        if (!$loggedIn) {
            $message = "Ërror During Login";
            $errors = new MessageBag([
                'password' => 'Invalid Password Entered'
            ]);


             //      - Go back to the log in page, but pass the $errors and $message variable above
            return view('login', compact('errors', 'message'));
        }

        $user = auth()->user();
        
        // TODO: We will store the logged in user in a Session variable,
        //          So that we can access the logged in user across the application

        Session(['user' => $user]);
        // return session('user');

        return redirect('/homepage');


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
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ];
    }

}
