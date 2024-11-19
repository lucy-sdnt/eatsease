<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;
use App\Models\Staff;
use App\Models\Payment;
use App\Models\Tables;


class Orders_controller extends Controller
{
    function insertar(Request $reque){
        $orders=new Orders();
        $orders->status_or=1;
        $orders->date_ord= $reque->date_ord;
        $orders->table_id= $reque->table_id; 
        $orders->staff_id= $reque->staff_id;
        $orders->payment_id= $reque->payment_id;

        $orders->save();

        //return "guardado";
        //return view("lista_nota");
        return redirect()->route("orders.mostrar");
    }
    function mostrar(){
        $datos_orders = Orders::select('orders.id', 'orders.date_ord', 'tables.table_number', 'staff.first_name', 'payment.pay_type')
            ->join('tables', 'orders.table_id', '=', 'tables.id')
            ->join('staff', 'orders.staff_id', '=', 'staff.id')
            ->join('payment', 'orders.payment_id', '=', 'payment.id')
            ->get();

        return view('list_orders', compact('datos_orders'));

    }

    public function edit($id)
    {
        $order = Orders::with('tables')->findOrFail($id); // Carga la relación con tables
        $staff = Staff::all();
        $paymentTypes = Payment::all();
        $tables = Tables::all(); // Para mostrar las opciones de mesas en el formulario
        return view('edit_orders', compact('order', 'staff', 'paymentTypes', 'tables'));
    }
    


    public function update(Request $request, $id)
    {
        $request->validate([
            'date_ord' => 'required|date',
            'table_id' => 'required|exists:tables,id', // Valida que exista en la tabla tables
            'staff_id' => 'required|exists:staff,id', 
            'payment_id' => 'required|exists:payment,id', 
        ]);
    
        $order = Orders::findOrFail($id);
        $order->update([
            'date_ord' => $request->date_ord,
            'table_id' => $request->table_id, // Guarda el ID de la mesa
            'staff_id' => $request->staff_id,
            'payment_id' => $request->payment_id,
        ]);
    
        return redirect()->route('orders.mostrar')->with('success', 'Orden actualizada correctamente');
    }

    public function delete($id)
    {
        $order = Orders::find($id);

        if (!$order) {
            return redirect()->route('orders.mostrar')->with('error', 'Orden no encontrada');
        }

        $order->status = 0;
        $order->save();

        return redirect()->route('orders.mostrar')->with('success', 'Se elimino la orden de manera exitosa');
    }

}
