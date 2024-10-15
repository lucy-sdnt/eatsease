<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Ordenes</title>
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
        input[type="date"] {
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
        select {
        appearance: none;
        background-color: #f8f9fa;
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        color: #495057;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        outline: none;
        padding: 10px;
        width: 100%;
        }
        select::-ms-expand {
        display: none;
        }

        select::after {
        content: '\f107';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        }
        select option {
        background-color: #ffffff;
        color: #495057;
        }
		

    </style>
</head>
<body>
    

	

    <form action="{{route('orders.insertar')}}" method="post">
        @csrf
        <label>Fecha</label>
        <input type="date" name="date_ord"><br>
        
        <select name="table_id">
            @php
                use App\Models\Tables;
                $datos_tables=Tables::all();
            @endphp
            @foreach ($datos_tables as $dato)
                <option value="{{$dato->id}}">{{$dato->table_number}}</option>
            @endforeach
        </select>
        
        <br><br>

        <select name="staff_id">
            @php
                use App\Models\Staff;
                $datos_staff=Staff::all();
            @endphp
            @foreach ($datos_staff as $dato)
                <option value="{{$dato->id}}">{{$dato->first_name}}</option>
            @endforeach
        </select><br><br>
        
        <select name="payment_id">
            @php
                use App\Models\Payment;
                $datos_payment=Payment::all();
            @endphp
            @foreach ($datos_payment as $dato)
                <option value="{{$dato->id}}">{{$dato->pay_type}}</option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="Guardar">
        
        <a href="/listadoOrdenes">Ver lista</a>
    </form>
</body>
</html>