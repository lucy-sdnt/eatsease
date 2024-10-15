<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

class Categories_controller extends Controller
{
    function insertar(Request $req){
        $categories=new Categories();
        $categories->name_c= $req->name_c;

        $categories->save();
        return redirect()->route("categories.mostrar");
    }

    function mostrar(){
        $datos_categories=Categories::all();
        return view("list_categories", compact("datos_categories"));
    }
    
}


