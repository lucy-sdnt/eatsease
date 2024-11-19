<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Items;
use App\Models\Menu;
use App\Models\Orders;

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
        $datos_items=Items::select('items.id','items.quantity_it','items.special_instructions','orders.date_ord','menu.name_m')
        ->join("orders","items.order_id","=","orders.id")
        ->join("menu","items.menu_id","=","menu.id")
        ->get();
        return view("list_items", compact("datos_items"));
    }

    public function edit($id)
    {
    $item = Items::findOrFail($id); 
    $orders = Orders::all(); 
    $menus = Menu::all(); 
    return view('edit_items', compact('item', 'orders', 'menus'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'quantity_it' => 'required|integer|min:1',
        'special_instructions' => 'nullable|string',
        'order_id' => 'required|exists:orders,id',
        'menu_id' => 'required|exists:menu,id',
    ]);

    $item = Items::findOrFail($id);
    $item->update([
        'quantity_it' => $request->quantity_it,
        'special_instructions' => $request->special_instructions,
        'order_id' => $request->order_id,
        'menu_id' => $request->menu_id,
    ]);

    return redirect()->route('items.mostrar')->with('success', 'Item actualizado correctamente');
    }
    public function delete($id)
    {
        $item = Items::find($id);

        if (!$item) {
            return redirect()->route('items.mostrar')->with('error', 'Producto no encontrado');
        }

        $item->status = 0;
        $item->save();

        return redirect()->route('items.mostrar')->with('success', 'Se elimino el producto de manera exitosa');
    }

}
