<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inventory;

class Inventory_controller extends Controller
{
    function insertar(Request $re){
        $inventory=new Inventory();
        $inventory->name_in= $re->name_in;
        $inventory->quantity_in= $re->quantity_in;
        $inventory->unit= $re->unit;
        $inventory->supplier_id= $re->supplier_id;

        $inventory->save();
        return redirect()->route("inventory.mostrar");
    }

    function mostrar(){
        $datos_inventory=Inventory::join("suppliers","inventory.supplier_id","=","suppliers.id")->get();
        return view("list_inventory", compact("datos_inventory"));
    }
}
