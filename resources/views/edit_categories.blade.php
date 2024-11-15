<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
        <label>Editar Categoría</label>
        <form action="{{ url('/update_categories/' . $category->id) }}" method="POST">
            @csrf
                <label for="name_c">Nombre de la Categoría</label>
                <input type="text" name="name_c" id="name_c" value="{{ $category->name_c }}" required>
                <input type="submit" value="Actualizar">
                <a href="/listadoCategorias">Ver lista</a>
            <a href="{{ route('categories.mostrar') }}">Cancelar</a>
        </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
