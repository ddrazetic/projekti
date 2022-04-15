<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <!-- <link href="{{ asset('./css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('./css/styles.css') }}" rel="stylesheet">




</head>

<body class="antialiased">
    <h1 class="homeHeader">Dobro došli na stranicu Projekti.com!</h1>
    @if (Route::has('login'))
    <div class="homeContainer">
        @auth
        <a href="{{ url('/home') }}" class="homeLink">Naslovnica</a>
        @else
        <a href="{{ route('login') }}" class="homeLink">Prijavi se</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="homeLink">Registriraj se</a>
        @endif
        @endauth
    </div>
    @endif



</body>

</html>