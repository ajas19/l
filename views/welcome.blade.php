<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
</head>
<body>
    <nav>
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/login') }}">Log in</a>
        <a href="{{ url('/register') }}">Register</a>
        <a href="{{ url('/order') }}">Order</a>
    </nav>

    @yield('content')

</body>
</html>
