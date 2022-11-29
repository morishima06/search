<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
        @if(app('env')=='local')
        <script src="{{ asset('/js/app.js') }}"></script>
        @endif

        @if(app('env')=='production')
        <script src="{{ asset('/js/app.js') }}"></script>
        @endif

        <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />



        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body class="font-sans antialiased">
            @include('layouts.header')
            @include('layouts.responsive-navigation')

            <main class=" md:pt-24">
                <div class="flex ">
                @include('layouts.navigation')

                {{ $slot }}
                </div>
            </main>
    </body>

   
</html>


