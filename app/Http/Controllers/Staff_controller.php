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
        return redirect()->route("staff.mostrar")->with('error', 'Empleado no encontrado');
    }

    function mostrar(){
        $datos_staff=Staff::where('status', 1)->get();
        return view("list_staff", compact("datos_staff"));
    }

    public function edit($id)
    {
        $staff = Staff::find($id);

        if (!$staff) {
            return redirect()->route('staff.mostrar')->with('error', 'Empleado no encontrado');
        }

        return view('edit_staff', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_st' => 'required|string|max:15',
            'email_st' => 'required|email|max:255',
            'role' => 'required|string|max:100',
            'hired_at' => 'required|date',
        ]);

        $staff = Staff::find($id);

        if (!$staff) {
            return redirect()->route('staff.mostrar')->with('error', 'Empleado no encontrado');
        }

        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->phone_st = $request->input('phone_st');
        $staff->email_st = $request->input('email_st');
        $staff->role = $request->input('role');
        $staff->hired_at = $request->input('hired_at');
        $staff->save();

        return redirect()->route('staff.mostrar')->with('success', 'Empleado actualizado exitosamente');
    }

    public function delete($id)
    {
        $staff = Staff::find($id);

        if (!$staff) {
            return redirect()->route('staff.mostrar')->with('error', 'Empleado no encontrada');
        }

        $staff->status = 0;
        $staff->save();

        return redirect()->route('staff.mostrar')->with('success', 'Se elimino el empleado de manera exitosa');
    }
}
