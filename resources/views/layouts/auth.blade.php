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
    {{--<link href="{{ asset('css/landing_page_theme.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/floating_labels.css') }}" rel="stylesheet">

    <style>
        body * {
            font-family: 'Nunito', sans-serif;
        }

        /* Sticky footer styles
        ---------------------------------------------- */
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            background: #202020;
            color: #FFFFFF;

            margin-bottom: 60px; /* Margin bottom by footer height */
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px; /* Set the fixed height of the footer here */
            line-height: 50px; /* Vertically center the text there */
        }

        /*.navbar, .footer {
            background: #202020;
            color: #FFFFFF;
        }*/

    </style>

</head>
<body style="background-image: url(images/registrationBackground.jpg); background-repeat: no-repeat; background-size: cover;  background-color: dark;">
<header class="site-header">
    <div class="container">
        <nav class="navbar fixed-top navbar-dark">
            <a class="navbar-brand text-white" href="/">
                {{--<img src="img/vuna.png"
                     alt="mauzosheet logo">--}}
                <i class="now-ui-icons sound-wave"></i>
                <span style="font-size: 110%;">Etricia</span>
            </a>
        </nav>
    </div>
</header>

<main role="main" class="container mt-5">

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts')

</main>

<footer class="footer">
    <div class="container">

        <div class="text-center">
            <h6 class="small text-muted">
                Copyright © 2015 - {{ date('Y') }}, MauzoSheet, a product of BlackScience. All rights reserved.
            </h6>
        </div>

    </div>
</footer>

</body>
</html>
