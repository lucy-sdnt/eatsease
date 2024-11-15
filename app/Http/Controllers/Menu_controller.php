<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

use App\Models\Menu;

class Menu_controller extends Controller
{
    function insertar(Request $requ){
        $menu=new Menu();
        $menu->name_m = $requ->name_m;
        $menu->description= $requ->description;
        $menu->price= $requ->price;
        $menu->category_id= $requ->category_id;

        $menu->save();

        //return "guardado";
        //return view("lista_nota");
        return redirect()->route("menu.mostrar");
    }
    function mostrar(){
        $datos_menu=Menu::join("categories","menu.category_id","=","categories.id")->get();
        return view("list_menu", compact("datos_menu"));
    }

    public function edit($id)
    {
    $menu = Menu::findOrFail($id);
    $categories = Categories::all(); 
    return view('edit_menu', compact('menu', 'categories')); 
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->name_m = $request->input('name_m');
        $menu->description = $request->input('description');
        $menu->price = $request->input('price');
        $menu->category_id = $request->input('category_id');
        $menu->save();

        return redirect('/listadoMenu')->with('success', 'Menú actualizado con éxito.');
    }

    public function destroy($id)
    {
    $menu = Menu::findOrFail($id);
    $menu->delete();

    return redirect()->route('/listadoMenu')->with('success', 'Elemento de menú eliminado exitosamente.');
    }

}
