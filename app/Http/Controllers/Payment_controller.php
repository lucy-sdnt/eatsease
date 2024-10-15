<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;

class Payment_controller extends Controller
{
    function insertar(Request $reques){
        $payment=new Payment();
        $payment->pay_type= $reques->pay_type;
        $payment->status_pa=1;

        $payment->save();
        return redirect()->route("payment.mostrar");
    }

    function mostrar(){
        $datos_payment=Payment::all();
        return view("list_payment", compact("datos_payment"));
    }
}
