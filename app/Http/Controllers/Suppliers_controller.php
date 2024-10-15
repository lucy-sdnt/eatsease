<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suppliers;

class Suppliers_controller extends Controller
{
    function insertar(Request $ru){
        $suppliers=new Suppliers();
        $suppliers->name_s= $ru->name_s;
        $suppliers->contact= $ru->contact;
        $suppliers->phone_su= $ru->phone_su;
        $suppliers->email_su= $ru->email_su;
        $suppliers->address= $ru->address;

        $suppliers->save();
        return redirect()->route("suppliers.mostrar");
    }

    function mostrar(){
        $datos_suppliers=Suppliers::all();
        return view("list_suppliers", compact("datos_suppliers"));
    }
}
