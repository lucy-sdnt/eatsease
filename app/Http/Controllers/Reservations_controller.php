<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservations;
use App\Models\Tables;

class Reservations_controller extends Controller
{
    function insertar(Request $request){
        $reservations=new Reservations();
        $reservations->customer_name= $request->customer_name;
        $reservations->customer_phone= $request->customer_phone;
        $reservations->reservation_date= $request->reservation_date;
        $reservations->status_re=1;
        $reservations->table_id= $request->table_id;

        $reservations->save();

        //return "guardado";
        //return view("lista_nota");
        return redirect()->route("reservations.mostrar");
    }
    public function mostrar()
    {
        $datos_reservations = Reservations::join('tables', 'reservations.table_id', '=', 'tables.id')
            ->select('reservations.*', 'tables.table_number')
            ->where('reservations.status', 1)
            ->get();
        return view("list_reservations", compact("datos_reservations"));
    }
    

    public function edit($id)
    {
        $reservation = Reservations::find($id);
        $tables = Tables::all(); 

        if (!$reservation) {
            return redirect()->route('reservations.mostrar')->with('error', 'Reservación no encontrada');
        }

        return view('edit_reservations', compact('reservation', 'tables'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:15',
            'reservation_date' => 'required|date',
            'status_re' => 'required|integer|in:0,1', // 0 = Pendiente, 1 = Confirmada
            'table_id' => 'required|exists:tables,id',
        ]);

        $reservation = Reservations::find($id);

        if (!$reservation) {
            return redirect()->route('reservations.mostrar')->with('error', 'Reservación no encontrada');
        }

        $reservation->customer_name = $request->input('customer_name');
        $reservation->customer_phone = $request->input('customer_phone');
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->status_re = $request->input('status_re');
        $reservation->table_id = $request->input('table_id');
        $reservation->save();

        return redirect()->route('reservations.mostrar')->with('success', 'Reservación actualizada exitosamente');
    }

    public function delete($id)
    {
        $reservation = Reservations::find($id);

        if (!$reservation) {
            return redirect()->route('reservations.mostrar')->with('error', 'Reservación no encontrada');
        }

        $reservation->status = 0;
        $reservation->save();

        return redirect()->route('reservations.mostrar')->with('success', 'Se elimino la reservación de manera exitosa');
    }
}
