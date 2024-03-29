<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class PaymentController extends Controller
{
    //
    public function getPayment(){

        $payment = Payment::all(); 


        return $payment;
    }

    public function payment (Request $request)
    {

    //  $newPayment = new Payment();
  
    //     $newPayment->name = $request->name;
    //     $newPayment->id_number = $request->id_number;
    //     $newPayment->amount_paid = $request->amount_paid;
    //     $newPayment->for = $request->for;
    //     $newPayment->receipt_number = $request->receipt_number;
        
    //     $newPayment->save();

    // //     return $newPayment;
    // // }


        
    
    $newPayment = Payment::create([
        'name' => $request->name,   //"police_name": "Priscilla Njeri",
        'id_number' => $request->id_number,
        'amount_paid' => $request->amount_paid,
        'for' => $request->for,
        'receipt_number' => $request->receipt_number
    ]);

    return $this->get_payments($request);
    // return redirect()->action([AbstractsController::class, 'get_abstracts']);


    }
    public function get_payments (Request $request){
      
        if($request == null) {
            $searchTerm = "";
        } else {
            $searchTerm = $request->search_term;
        }

        if($searchTerm != ""){
            $payment = Payment::where('name',"LIKE", "%$searchTerm%")
                ->orWhere('id_number',"LIKE", "%$searchTerm%")
                ->orWhere('amount_paid',"LIKE", "%$searchTerm%")
                ->orWhere('for',"LIKE", "%$searchTerm%")
                ->orWhere('receipt_number',"LIKE", "%$searchTerm%")
                ->get();            
        }
        else{ 
            $payment = Payment::get();  
        }
        
    
        return view ('paymentslist', compact('payment', 'searchTerm'));
    
    }

}
