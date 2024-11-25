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
        $datos_payment=Payment::where('status', 1)->get();
        return view("list_payment", compact("datos_payment"));
    }

    public function edit($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payment.mostrar')->with('error', 'Método de pago no encontrado');
        }

        return view('edit_payment', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pay_type' => 'required|string|max:255',
            'status_pa' => 'required|string|max:255',
        ]);

        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payment.mostrar')->with('error', 'Método de pago no encontrado');
        }

        $payment->pay_type = $request->input('pay_type');
        $payment->status_pa = (int) $request->input('status_pa');
        $payment->save();

        return redirect()->route('payment.mostrar')->with('success', 'Método de pago actualizado exitosamente');
    }

    public function delete($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payment.mostrar')->with('error', 'Método de pago no encontrado');
        }

        $payment->status = 0;
        $payment->save();

        return redirect()->route('payment.mostrar')->with('success', 'Se elimino el método de pago de manera exitosa');
    }
}
