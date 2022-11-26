<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<script src="{{ asset('/js/app.js') }}"></script>
<script src="https://cdn.tailwindcss.com"></script>

<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
</head>
<body class="font-sans antialiased">
    
    
@include('layouts.header')

<div class="error-wrap pt-24 h-screen flex items-center justify-center">
  <section>
    <p class="text-3xl">@yield('code') @yield('message')</p>
    <p class="text-lg font-semibold">@yield('detail')</p>
    

    @yield('link')
  </section>
</div>
</body>
</html>