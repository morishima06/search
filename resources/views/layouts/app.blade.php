<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'search') }}</title>
    <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>
</head>

<body class="antialiased font-sans min-h-screen flex-col flex ">
    @include('layouts.header')
    @include('layouts.responsive-navigation')

    <main class=" md:pt-24 flex-1 ">
        <div class="flex ">
            @include('layouts.navigation')

            {{ $slot }}
        </div>

    </main>
    @include('layouts.footer')
</body>

</html>