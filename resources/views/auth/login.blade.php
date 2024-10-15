<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">

    
<style>
        
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        margin: 150px;
        padding: 0;
    }
    .centered-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 1rem;
        box-sizing: border-box;
    }
    .content {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        text-align: center;
        max-width: 100%;
        width: 100%;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        max-width: 100%;
        width: 100%;
    }
    input[type="email"],
    input[type="password"] {
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 14px;
        outline: none;
        width: 100%;
    }
    label{
        color: #191919;
        font-size: 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    a {
  color: #4A4A4A;
  text-decoration: none;
  transition: all 0.3s ease-in-out;
    }

    a:hover {
    color: #EF5B5B;
    text-decoration: none;
    }

    button {
        background-color: #2d3748;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        margin: 20px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button:hover {
        background-color: #1a202c;
    }
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

    <a href="/start" class="home-link"><img src="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" alt="Home"></a>

<br>
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>
        <x-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>

                
                
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="block mt-4">
                {{-- <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label> --}}
            </div>
            <div class="flex items-center justify-end mt-4">
                
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="register">
                        No tienes una cuenta?
                    </a>
                <x-button class="ml-4">
                    {{ __('Ingresar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

</body>
</html>