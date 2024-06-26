<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login Chrystalis') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-opacity-80">
        <div>
            <a href="/">
                <div id="logo">
                    <img src="{{ asset('Images\CatalogueImg\logo-tp.png') }}" alt="TopLeft Logo" style="display: block;
                            margin-left: auto;
                            margin-right: auto;
                            width:40%;
                            height:40%;" class="align-items-center img-fluid" />
                </div>

            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-opacity-20 bg-white/20 backdrop-blur-sm shadow-xl overflow-hidden sm:rounded-lg" style="border: 2px solid #DAA520;">
            <div>{{ $slot }}</div>
        </div>
    </div>
<style>
        body {
            background-image: url('{{ asset("Images/HomePage/login.jpg") }}');
            background-size: 100%; /* make the image smaller */
        }
</style>
</body>

</html>