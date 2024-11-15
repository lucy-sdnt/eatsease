<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
<body>
    <h2>Editar Empleado</h2>
    <form action="{{ route('staff.update', ['id' => $staff->id]) }}" method="post">
        @csrf

        <label for="first_name">Nombre:</label>
        <input type="text" name="first_name" id="first_name" value="{{ $staff->first_name }}" required>
        <br>

        <label for="last_name">Apellido:</label>
        <input type="text" name="last_name" id="last_name" value="{{ $staff->last_name }}" required>
        <br>

        <label for="phone_st">Teléfono:</label>
        <input type="text" name="phone_st" id="phone_st" value="{{ $staff->phone_st }}" required>
        <br>

        <label for="email_st">Correo Electrónico:</label>
        <input type="email" name="email_st" id="email_st" value="{{ $staff->email_st }}" required>
        <br>

        <label for="role">Rol:</label>
        <input type="text" name="role" id="role" value="{{ $staff->role }}" required>
        <br>

        <label for="hired_at">Fecha de Contratación:</label>
        <input type="date" name="hired_at" id="hired_at" value="{{ $staff->hired_at }}" required>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
