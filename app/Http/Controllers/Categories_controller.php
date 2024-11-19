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

    public function edit($id)
{
    $category = Categories::find($id);

    if (!$category) {
        return redirect()->route('categories.mostrar')->with('error', 'Categoría no encontrada');
    }

    return view('edit_categories', compact('category'));
}

public function update(Request $request, $id)
    {
    
    $request->validate([
        'name_c' => 'required|string|max:255',
    ]);

    $category = Categories::find($id);

    if (!$category) {
        return redirect()->route('categories.mostrar')->with('error', 'Categoría no encontrada');
    }

    $category->name_c = $request->input('name_c');
    $category->save();

    return redirect()->route('categories.mostrar')->with('success', 'Categoría actualizada exitosamente');
    }

    public function delete($id)
    {
        $category = Categories::find($id);

        if (!$category) {
            return redirect()->route('categories.mostrar')->with('error', 'Categoría no encontrada');
        }

        $category->status = 0;
        $category->save();

        return redirect()->route('categories.mostrar')->with('success', 'Categoría desactivada exitosamente');
    }
    
}


