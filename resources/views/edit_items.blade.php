<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
    <h2>Editar Producto</h2>
    <form action="{{ url('/update_items/' . $item->id) }}" method="post">
        @csrf

        <label for="quantity_it">Cantidad:</label>
        <input type="number" name="quantity_it" id="quantity_it" value="{{ $item->quantity_it }}" required>
        <br>
        <label for="special_instructions">Instrucciones Especiales:</label>
        <textarea name="special_instructions" id="special_instructions">{{ $item->special_instructions }}</textarea>
        <br>
        <label for="order_id">Orden:</label>
        <select name="order_id" id="order_id" required>
            @foreach ($orders as $order)
                <option value="{{ $order->id }}" {{ $item->order_id == $order->id ? 'selected' : '' }}>
                    {{ $order->date_ord }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="menu_id">Menú:</label>
        <select name="menu_id" id="menu_id" required>
            @foreach ($menus as $menu)
                <option value="{{ $menu->id }}" {{ $item->menu_id == $menu->id ? 'selected' : '' }}>
                    {{ $menu->name_m }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
