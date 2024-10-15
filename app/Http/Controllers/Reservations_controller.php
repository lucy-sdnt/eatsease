<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservations;

class Reservations_controller extends Controller
{
    function insertar(Request $request){
        $reservations=new Reservations();
        $reservations->customer_name= $request->customer_name;
        $reservations->customer_phone= $request->customer_phone;
        $reservations->reservation_date= $request->reservation_date;
        $reservations->status_re=1;
        $reservations->table_id= $request->table_id;

        $reservations->save();

        //return "guardado";
        //return view("lista_nota");
        return redirect()->route("reservations.mostrar");
    }
    function mostrar(){
        $datos_reservations=Reservations::join("tables","reservations.table_id","=","tables.id")->get();
        return view("list_reservations", compact("datos_reservations"));
    }
}
