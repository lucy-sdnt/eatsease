<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Menú</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
    <style>
        
    </style>
</head>
<body>
    <form action="{{ url('/update/' . $menu->id) }}" method="post">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name_m" value="{{ $menu->name_m }}"><br>
        <label>Descripcion</label>
        <input type="text" name="description" value="{{ $menu->description }}"><br>
        <label>Precio</label>
        <input type="text" name="price" value="{{ $menu->price }}"><br>
        <label>Categoría</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $menu->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name_c }}
                </option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Actualizar">
        <a href="/listadoMenu">Ver lista</a>
    </form>
</body>
</html>
