<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'search') }}</title>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <script src="{{ asset('/js/swiper/swiper-bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css')  }}" >
    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">





</head>

<body class="antialiased font-sans min-h-screen flex-col flex   ">
    @include('layouts.header')
    <main class="pt-20  flex-1 ">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
@yield('style')
@yield('script')

</html>