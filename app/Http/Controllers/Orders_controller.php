<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;

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
        $datos_orders = Orders::select('orders.date_ord', 'tables.table_number', 'staff.first_name', 'payment.pay_type')
            ->join('tables', 'orders.table_id', '=', 'tables.id')
            ->join('staff', 'orders.staff_id', '=', 'staff.id')
            ->join('payment', 'orders.payment_id', '=', 'payment.id')
            ->get();

        return view('list_orders', compact('datos_orders'));

    }
}
