<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="/style.css">
    @yield('style')
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        @include('partials.nav')
    </header>
{{-- Secciones para llenar --}}
    @yield('content')
    @yield('segment')

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
