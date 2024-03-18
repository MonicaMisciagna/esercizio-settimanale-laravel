<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
           <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100  selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="button font-semibold text-pink-600 hover:text-pink-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-pink-500 bg-pink-500 bg-opacity-25 p-3 rounded-lg">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button font-semibold text-pink-600 hover:text-pink-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-pink-500 bg-pink-500 bg-opacity-25 p-3 rounded-lg">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            

                <div class="mt-16 container rounded-lg">
                    <div class="text-center bg-orange-300 py-5 rounded-lg">
                       <h1 class="text-3xl font-bold text-pink-600 mx-3">Project Manager</h1>
                       <div class="mt-5">
                       <a href="{{ route('login') }}" class=" button font-semibold text-pink-600 hover:text-pink-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-pink-500 bg-pink-500 bg-opacity-25 p-3 rounded-lg ">Start!</a>
                        </div>
                    </div>
                        </div>
        </div>
    </body>
</html>
