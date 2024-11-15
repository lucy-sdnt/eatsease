<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Orden</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
</head>
<body>
<form action="{{ url('/update_orders/' . $order->id) }}" method="post">
    @csrf
    <label>Fecha de la Orden</label>
<input type="date" name="date_ord" value="{{ $order->date_ord }}"><br>

<label>Número de Mesa</label>
<select name="table_id">
    @foreach ($tables as $table)
        <option value="{{ $table->id }}" {{ $order->table_id == $table->id ? 'selected' : '' }}>
            {{ $table->table_number }}
        </option>
    @endforeach
</select><br>

<label>Empleado (Staff)</label>
<select name="staff_id">
    @foreach ($staff as $employee)
        <option value="{{ $employee->id }}" {{ $order->staff_id == $employee->id ? 'selected' : '' }}>
            {{ $employee->first_name }}
        </option>
    @endforeach
</select><br>

<label>Tipo de Pago</label>
<select name="payment_id" id="payment_type">
    @foreach ($paymentTypes as $payment)
        <option value="{{ $payment->id }}" {{ $order->payment_id == $payment->id ? 'selected' : '' }}>
            {{ $payment->pay_type }}
        </option>
    @endforeach
</select><br>

    <input type="submit" value="Actualizar Orden">
    <a href="/listadoOrdenes">Ver lista de órdenes</a>
</form>
</body>
</html>
