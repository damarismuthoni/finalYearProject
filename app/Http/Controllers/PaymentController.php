<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function getPayment(){

        $payment = Payment::all(); 


        return $payment;
    }

    public function payment (Request $request)
    {

     $newPayment = new Payment();
  
        $newPayment->arrest_id = $request->arrest_id;
        $newPayment->amount_paid = $request->amount_paid;
        $newPayment->receipt_number = $request->receipt_number;
        
        $newPayment->save();

        return $newPayment;
    }
    public function get_payments ( ){
    
        // // select * from abstracts;
        $payment = Payment::get();
        // ::with('police_station')->get();
        // return $payment;
    
    
        return view ('paymentslist', compact('payment'));
    
    }
}
