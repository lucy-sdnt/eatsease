<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Staff;

class Staff_controller extends Controller
{
    function insertar(Request $rq){
        $staff=new Staff();
        $staff->first_name= $rq->first_name;
        $staff->last_name= $rq->last_name;
        $staff->phone_st= $rq->phone_st;
        $staff->email_st= $rq->email_st;
        $staff->role= $rq->role;
        $staff->hired_at= $rq->hired_at;

        $staff->save();
        return redirect()->route("staff.mostrar");
    }

    function mostrar(){
        $datos_staff=Staff::all();
        return view("list_staff", compact("datos_staff"));
    }
}
