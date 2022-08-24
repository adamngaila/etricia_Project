
<!doctype html>
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
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/A.style.css.pagespeed.cf.Dozd_l2e5I.css">

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
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">

@include('landing_page.header')

<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Make an order</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-10 col-md-12">
<div class="wrapper">
<div class="row justify-content-center">
<div class="col-lg-8 mb-5">
<div class="row">
<div class="col-md-4">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text">
<p><span>Address:</span> Toangoma, Dar es salaam</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text">
<p><span>Phone:</span> <a href="tel://1234567920">+ 255 686 036 401</a></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text">
<p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#5d34333b321d2432282f2e342938733e3230"><span class="__cf_email__" data-cfemail="2e474048416e57415b5c5d475a4b004d4143">info@etrciatz.com</span></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="contact-wrap">
<h3 class="mb-4 text-center">Get in touch with us</h3>
<div id="form-message-warning" class="mb-4 w-100 text-center"></div>
<div id="form-message-success" class="mb-4 w-100 text-center">
Your order was sent, thank you!
</div>
<form method="POST" id="contactForm" name="contactForm" class="contactForm">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Name">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Pack category">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Description of Pack"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
@include('landing_page.footer')

</div>
</div>
</div>
</div>
</div>
</section>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js.pagespeed.jc.CMHPVqxXdk.js"></script><script>eval(mod_pagespeed_qp47snAM5P);</script>
<script>eval(mod_pagespeed_AIqqgrNEIG);</script>
<script src="js/jquery.validate.min.js+main.js.pagespeed.jc.bE1NJii2AK.js"></script><script>eval(mod_pagespeed_3PUR1mZ3pN);</script>
<script>eval(mod_pagespeed_LV9X$crJ7e);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"73fd86804d469cae","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
