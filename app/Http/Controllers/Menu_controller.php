<?php

namespace App\Http\Controllers;

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
}
