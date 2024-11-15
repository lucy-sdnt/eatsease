<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reservación</title>
</head>
<body>
    <h2>Editar Reservación</h2>
    <form action="{{ route('update_reservations', ['id' => $reservation->id]) }}" method="post">
        @csrf

        <label for="customer_name">Nombre del Cliente:</label>
        <input type="text" name="customer_name" id="customer_name" value="{{ $reservation->customer_name }}" required>
        <br>

        <label for="customer_phone">Número de Teléfono:</label>
        <input type="text" name="customer_phone" id="customer_phone" value="{{ $reservation->customer_phone }}" required>
        <br>

        <label for="reservation_date">Fecha de Reservación:</label>
        <input type="date" name="reservation_date" id="reservation_date" value="{{ $reservation->reservation_date }}" required>
        <br>

        <label for="status_re">Estado:</label>
        <select name="status_re" id="status_re" required>
            <option value="0" {{ $reservation->status_re == 0 ? 'selected' : '' }}>Pendiente</option>
            <option value="1" {{ $reservation->status_re == 1 ? 'selected' : '' }}>Confirmada</option>
        </select>
        <br>

        <label for="table_id">Número de Mesa:</label>
        <select name="table_id" id="table_id" required>
            @foreach ($tables as $table)
            <option value="{{ $table->id }}" {{ $reservation->table_id == $table->id ? 'selected' : '' }}>
                {{ $table->table_number }}
            </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
