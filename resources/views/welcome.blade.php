<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#202020">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Etricia') }}</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="css/fontawesome-all.min.css">-->
    <script src="https://kit.fontawesome.com/590323187f.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing_page_theme.min.css') }}" rel="stylesheet">

    <style>
        body * {
            font-family: 'Nunito', sans-serif;
        }
        body {
            background: #202020;
            color: #FFFFFF;
        }
    </style>
</head>

<body>

@include('landing_page.header')

@include('landing_page.content')

@include('landing_page.footer')

</body>

</html>
