<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Método de Pago</title>
</head>
<body>
    <h2>Editar Método de Pago</h2>
    <form action="{{ url('/update_payment/' . $payment->id) }}" method="post">
        @csrf

        <label for="pay_type">Tipo de Pago:</label>
        <input type="text" name="pay_type" id="pay_type" value="{{ $payment->pay_type }}" required>
        <br>

        <label for="status_pa">Estado:</label>
        <select name="status_pa" id="status_pa" required>
            <option value="1" {{ $payment->status_pa == 1 ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ $payment->status_pa == 0 ? 'selected' : '' }}>Inactivo</option>
        </select>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
