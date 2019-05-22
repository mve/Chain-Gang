<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/backend.css') }}">

    <title>Chain gang</title>

</head>
<body>

    @include('includes.header_admin')

    @yield('content')

    @include('includes.footer_admin')

</body>
</html>
