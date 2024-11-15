<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mesa</title>
</head>
<body>
    <h2>Editar Mesa</h2>
    <form action="{{ route('update_tables', ['id' => $table->id]) }}" method="post">
        @csrf

        <label for="table_number">Número de Mesa:</label>
        <input type="number" name="table_number" id="table_number" value="{{ $table->table_number }}" required>
        <br>

        <label for="capacity">Capacidad:</label>
        <input type="number" name="capacity" id="capacity" value="{{ $table->capacity }}" required>
        <br>

        <label for="status_t">Estado:</label>
        <select name="status_ta" id="status_ta" required>
        <option value="1" {{ $table->status_ta == 1 ? 'selected' : '' }}>Disponible</option>
        <option value="0" {{ $table->status_ta == 0 ? 'selected' : '' }}>Ocupada</option>
        </select>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
