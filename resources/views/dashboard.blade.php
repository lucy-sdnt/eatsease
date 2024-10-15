<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
    <a href="/" class="home-link"><img src="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" alt="Home"></a>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        .home-link {
           position: fixed;
           top: 15px;
           right: 1155px;
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
    </style>
</head>
<body>

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>