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
        return redirect()->route("tables.mostrar");
    }

    function mostrar(){
        $datos_tables=Tables::all();
        return view("list_tables", compact("datos_tables"));
    }
}
