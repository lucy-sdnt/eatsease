<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Items;

class Items_controller extends Controller
{
    function insertar(Request $r){
        $items=new Items();
        $items->quantity_it= $r->quantity_it;
        $items->special_instructions= $r->special_instructions;
        $items->order_id= $r->order_id;
        $items->menu_id= $r->menu_id;

        $items->save();

        //return "guardado";
        //return view("lista_nota");
        return redirect()->route("items.mostrar");
    }
    function mostrar(){
        $datos_items=Items::select('items.quantity_it','items.special_instructions','orders.date_ord','menu.name_m')
        ->join("orders","items.order_id","=","orders.id")
        ->join("menu","items.menu_id","=","menu.id")
        ->get();
        return view("list_items", compact("datos_items"));
    }
}
