<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EventBrote</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet"
         href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    </head>
    <body>
        @include('layouts.partials._nav')

        <div class="container">

            @if(session()->has('notification.message'))
                <div class="alert alert-{{ session()->get('notification.type')}}">
                    {{ session()->get('notification.message') }}
                </div>
            @endif
            @yield('content')
        </div>

        <script src="//code.jquery.com/jquery.js"></script>
        <script src="{{ asset('/js/app.js')}}"></script>
        @include('flashy::message')

    </body>
</html>
