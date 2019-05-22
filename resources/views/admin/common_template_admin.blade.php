<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Chain gang</title>

</head>
<body>

    <div class="container-fluid">

        <div class="row">

            @include('includes.sidebar_admin')

            <div class="col-md-10 ml-auto">

                @include('includes.header_admin')

                @yield('content')

                @include('includes.footer_admin')

            </div>
        </div>

    </div>


</body>
</html>
