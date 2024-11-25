<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tables;

class Tables_controller extends Controller
{
    function insertar(Request $rs){
        $tables=new Tables();
        $tables->table_number= $rs->table_number;
        $tables->capacity= $rs->capacity;
        $tables->status_ta=1;

        $tables->save();
        return redirect()->route("tables.mostrar")->with('success', 'Mesa agregada exitosamente');
    }

    function mostrar(){
        $datos_tables=Tables::where('status', 1)->get();
        return view("list_tables", compact("datos_tables"));
    }

    public function edit($id)
    {
        $table = Tables::find($id);

        if (!$table) {
            return redirect()->route('tables.mostrar')->with('error', 'Mesa no encontrada');
        }

        return view('edit_tables', compact('table'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'table_number' => 'required|integer',
        'capacity' => 'required|integer',
        'status_ta' => 'required|integer|in:0,1',
    ]);

    $table = Tables::find($id);

    if (!$table) {
        return redirect()->route('tables.mostrar')->with('error', 'Mesa no encontrada');
    }

    $table->table_number = $request->input('table_number');
    $table->capacity = $request->input('capacity');
    $table->status_ta = $request->input('status_ta'); 
    $table->save();

    return redirect()->route('tables.mostrar')->with('success', 'Mesa actualizada exitosamente');
    }
    public function delete($id)
    {
        $table = Tables::find($id);

        if (!$table) {
            return redirect()->route('tables.mostrar')->with('error', 'Mesa no encontrada');
        }

        $table->status = 0;
        $table->save();

        return redirect()->route('tables.mostrar')->with('success', 'Se elimino la mesa de manera exitosa');
    }
}
