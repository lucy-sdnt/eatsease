<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Proveedores</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f6f6f6;
        }
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #f48d59;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        input[type="submit"]:hover {
            background-color: #f25a08;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px;
            text-decoration: none;
            color: #f48d59;
            transition: color 0.3s ease-in-out;
        }
        a:hover {
            color: #f25a08;
        }
        

    </style>
</head>
<body>
    

	

    <form action="{{route('suppliers.insertar')}}" method="post">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name_s"><br>
        <label>Contacto</label>
        <input type="text" name="contact"><br>
        <label>Telefono</label>
        <input type="number" name="phone_su"><br>
        <label>Correo</label>
        <input type="text" name="email_su"><br>
        <label>Direccion</label>
        <input type="text" name="address"><br>
        

        <input type="submit" value="Guardar">
        
        <a href="/listadoProveedores">Ver lista</a>
    </form>
</body>
</html>