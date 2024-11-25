<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inventory;
use App\Models\Suppliers;

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

    public function mostrar()
    {
    $datos_inventory = Inventory::select('inventory.id', 'inventory.name_in', 'inventory.quantity_in', 'inventory.unit', 'suppliers.name_s')
        ->join("suppliers", "inventory.supplier_id", "=", "suppliers.id")
        ->where('inventory.status', 1)
        ->get();

    return view("list_inventory", compact("datos_inventory"));
    }   


    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id); 
        $suppliers = Suppliers::all(); 
        return view('edit_inventory', compact('inventory', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_in' => 'required|string|max:255',
            'quantity_in' => 'required|integer|min:1',
            'unit' => 'required|string|max:100',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        $inventory = Inventory::findOrFail($id);
        $inventory->update([
            'name_in' => $request->name_in,
            'quantity_in' => $request->quantity_in,
            'unit' => $request->unit,
            'supplier_id' => $request->supplier_id,
        ]);

        return redirect()->route('inventory.mostrar')->with('success', 'Producto actualizado correctamente');
    }

    public function delete($id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return redirect()->route('inventory.mostrar')->with('error', 'Producto no encontrada');
        }

        $inventory->status = 0;
        $inventory->save();

        return redirect()->route('inventory.mostrar')->with('success', 'Se elimino el producto de manera exitosa');
    }

}
