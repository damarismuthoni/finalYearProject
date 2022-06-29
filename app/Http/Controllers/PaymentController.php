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
}
