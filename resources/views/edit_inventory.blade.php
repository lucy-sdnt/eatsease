<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Inventario</title>
</head>
<body>
    <h2>Editar Producto de Inventario</h2>
    <form action="{{ url('/update_inventory/' . $inventory->id) }}" method="post">
        @csrf

        <label for="name_in">Nombre del Producto:</label>
        <input type="text" name="name_in" id="name_in" value="{{ $inventory->name_in }}" required>
        <br>

        <label for="quantity_in">Cantidad:</label>
        <input type="number" name="quantity_in" id="quantity_in" value="{{ $inventory->quantity_in }}" required>
        <br>

        <label for="unit">Unidad:</label>
        <input type="text" name="unit" id="unit" value="{{ $inventory->unit }}" required>
        <br>

        <label for="supplier_id">Proveedor:</label>
        <select name="supplier_id" id="supplier_id" required>
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}" {{ $inventory->supplier_id == $supplier->id ? 'selected' : '' }}>
                    {{ $supplier->name_s }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
