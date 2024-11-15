<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
</head>
<body>
    <h2>Editar Proveedor</h2>
    <form action="{{ route('suppliers.update', ['id' => $supplier->id]) }}" method="post">
        @csrf

        <label for="name_s">Nombre:</label>
        <input type="text" name="name_s" id="name_s" value="{{ $supplier->name_s }}" required>
        <br>

        <label for="contact">Contacto:</label>
        <input type="text" name="contact" id="contact" value="{{ $supplier->contact }}" required>
        <br>

        <label for="phone_su">Teléfono:</label>
        <input type="text" name="phone_su" id="phone_su" value="{{ $supplier->phone_su }}" required>
        <br>

        <label for="email_su">Correo Electrónico:</label>
        <input type="email" name="email_su" id="email_su" value="{{ $supplier->email_su }}" required>
        <br>

        <label for="address">Dirección:</label>
        <textarea name="address" id="address" required>{{ $supplier->address }}</textarea>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
