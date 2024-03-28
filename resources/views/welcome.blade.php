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
    
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
</head>

<body class="font-sans ">
    @auth
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 bg-cover h-screen flex justify-center items-center flex-col">
        <h1 class="text-white text-4xl font-bold">Hello you are connected!</h1>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="bg-white text-cyan-500 rounded-lg font-bold p-2" type="submit">Logout</button>
        </form>
    </div>
    @endauth

    @guest
    <div class="bg-gradient-to-r from-orange-500 to-red-500 bg-cover h-screen flex justify-center items-center">
        <h1 class="text-white text-4xl font-bold">Hello you are  not authentificated :/</h1>
    </div>
    @endguest
    


</body>

</html>
