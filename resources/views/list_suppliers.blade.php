<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
        }

        h2 {
            margin-top: 30px;
            margin-bottom: 30px;
            font-weight: bold;
            text-align: center;
            font-size: 2rem;
            color: #343a40;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            font-weight: bold;
            background-color: #343a40;
            color: #ffffff;
        }
        a[href="/formularioProveedores"]:hover {
        background-color: #f25a08;
        }
        
		.home-link {
           position: fixed;
           top: 15px;
           right: 1150px;
           display: flex;
           align-items: center;
           justify-content: center;
           width: 40px;
           height: 40px;
           border-radius: 50%;
           background-color: #333;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
           z-index: 999;
           }
           .home-link img {
               width: 20px;
               height: 20px;
               fill: #fff;
           }
           
		.home-link {
           position: fixed;
           top: 15px;
           right: 1165px;
           display: flex;
           align-items: center;
           justify-content: center;
           width: 40px;
           height: 40px;
           border-radius: 50%;
           background-color: #333;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
           z-index: 999;
           }
           .home-link img {
               width: 20px;
               height: 20px;
               fill: #fff;
           }

           .action-btns a {
            font-size: 18px;
            margin-right: 10px;
            }

        .action-btns a:hover {
            text-decoration: none;
            }


    </style>
</head>
<body>
    

    <a href="/" class="home-link"><img src="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" alt="Home"></a>

    <div class="container">
        <h2>Proveedores</h2>
        <a href="/formularioProveedores" style="display: inline-block; text-decoration: none; font-size: 16px; font-weight: 600; color: #fff; background-color: #f48d59; padding: 10px 20px; border-radius: 4px; transition: background-color 0.3s ease-in-out;">Agregar</a>
        <br><br>
        <table>
            <tr>
                <th>Nombre proveedor</th>
                <th>Contacto</th>
                <th>Telefono</th>
                <th>Correo-e</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
            @foreach ($datos_suppliers as $dato)
            <tr>
                <td>{{$dato->name_s}}</td>
                <td>{{$dato->contact}}</td>
                <td>{{$dato->phone_su}}</td>
                <td>{{$dato->email_su}}</td>
                <td>{{$dato->address}}</td>
                <td class="action-btns">
                    <a href="/edit/{{$dato->id}}" class="text-primary" title="Editar">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="/delete/{{$dato->id}}" class="text-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar este proveedor?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>