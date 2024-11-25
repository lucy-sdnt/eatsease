<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesas</title>
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
        a[href="/formularioMesas"]:hover {
        background-color: #f25a08;
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
            .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease-in-out;
        }
        .overlay.show {
            opacity: 1;
            visibility: visible;
        }
        .overlay .icon {
            font-size: 100px;
            color: white;
            animation: bounce 1.5s ease infinite;
        }
        .overlay.success .icon {
            color: #28a745; 
        }
        .overlay.error .icon {
            color: #dc3545; 
        }
        .overlay .message {
        margin-top: 20px;
        font-size: 24px;
        font-weight: bold; 
        color: #00ff00; 
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7); 
    }
    .overlay.success .message {
        color: #00ff00; 
    }
    .overlay.error .message {
        color: #ff3333; 
    }
        @keyframes bounce {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <a href="/" class="home-link"><img src="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" alt="Home"></a>
    <div class="container">
        <h2>Mesas</h2>
        <a href="/formularioMesas" style="display: inline-block; text-decoration: none; font-size: 16px; font-weight: 600; color: #fff; background-color: #f48d59; padding: 10px 20px; border-radius: 4px; transition: background-color 0.3s ease-in-out;">Agregar</a>
        <br><br>
        <table>
            <tr>
                <th>Numero de mesa</th>
                <th>Capacidad</th>
                <th>Acciones</th>
            </tr>
            @foreach ($datos_tables as $dato)  
            <tr>
                <td>{{$dato->table_number}}</td>
                <td>{{$dato->capacity}}</td>
                <td class="action-btns">
                    <a href="{{ url('/edit_tables/' . $dato->id) }}" class="text-primary" title="Editar">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ url('/delete_tables/' . $dato->id) }}" class="text-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar esta mesa?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div id="notification-overlay" class="overlay">
        <i class="icon"></i>
        <div class="message"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showNotification(type, message) {
            const overlay = document.getElementById('notification-overlay');
            const icon = overlay.querySelector('.icon');
            const text = overlay.querySelector('.message');
            overlay.classList.remove('success', 'error');
            if (type === 'success') {
                overlay.classList.add('success');
                icon.classList.add('fas', 'fa-check-circle');
                icon.classList.remove('fa-times-circle');
                text.textContent = message || "Se eliminó la categoría de forma exitosa.";
            } else {
                overlay.classList.add('error');
                icon.classList.add('fas', 'fa-times-circle');
                icon.classList.remove('fa-check-circle');
                text.textContent = message || "Ocurrió un error al eliminar la categoría.";
            }
            overlay.classList.add('show');
            setTimeout(() => {
                overlay.classList.remove('show');
            }, 2000); 
        }
        @if (session('success'))
            showNotification('success', '{{ session('success') }}');
        @elseif (session('error'))
            showNotification('error', '{{ session('error') }}');
        @endif
    </script>
</body>
</html>