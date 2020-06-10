<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gifs</title>

        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @yield('main')
        <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    </body>
</html>
