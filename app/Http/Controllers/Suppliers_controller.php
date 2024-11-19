<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suppliers;

class Suppliers_controller extends Controller
{
    public function insertar(Request $req)
    {
        $supplier = new Suppliers();
        $supplier->name_s = $req->name_s;
        $supplier->contact = $req->contact;
        $supplier->phone_su = $req->phone_su;
        $supplier->email_su = $req->email_su;
        $supplier->address = $req->address;

        $supplier->save();
        return redirect()->route("suppliers.mostrar");
    }

    public function mostrar()
    {
        $datos_suppliers = Suppliers::all();
        return view("list_suppliers", compact("datos_suppliers"));
    }

    public function edit($id)
    {
        $supplier = Suppliers::find($id);

        if (!$supplier) {
            return redirect()->route('suppliers.mostrar')->with('error', 'Proveedor no encontrado');
        }

        return view('edit_suppliers', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_s' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'phone_su' => 'required|string|max:15',
            'email_su' => 'required|email|max:255',
            'address' => 'required|string|max:500',
        ]);

        $supplier = Suppliers::find($id);

        if (!$supplier) {
            return redirect()->route('suppliers.mostrar')->with('error', 'Proveedor no encontrado');
        }

        $supplier->name_s = $request->input('name_s');
        $supplier->contact = $request->input('contact');
        $supplier->phone_su = $request->input('phone_su');
        $supplier->email_su = $request->input('email_su');
        $supplier->address = $request->input('address');
        $supplier->save();

        return redirect()->route('suppliers.mostrar')->with('success', 'Proveedor actualizado exitosamente');
    }
    public function delete($id)
    {
        $supplier = Suppliers::find($id);

        if (!$supplier) {
            return redirect()->route('suppliers.mostrar')->with('error', 'Proveedor no encontrado');
        }

        $supplier->status = 0;
        $supplier->save();

        return redirect()->route('suppliers.mostrar')->with('success', 'Se elimino el proveedor de manera exitosa');
    }
}
