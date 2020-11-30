<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>იარაღების მაღაზია - მონადირის მაღაზიები - სამონადირეო მაღაზია - Caliber.ge</title>
    <meta name="keywords" content="იარაღების მაღაზია - მონადირის მაღაზიები - სამონადირეო მაღაზია - Caliber.ge" />
    <meta name="description" content="იარაღების მაღაზია - მონადირის მაღაზიები - სამონადირეო მაღაზია - Caliber.ge" />


    <meta property="og:title" content="იარაღების მაღაზია - მონადირის მაღაზიები - სამონადირეო მაღაზია - Caliber.ge - caliber.ge" />
    <meta property="og:description" content="იარაღების მაღაზია - მონადირის მაღაზიები - სამონადირეო მაღაზია - Caliber.ge" />
    <meta property="og:url" content="https://caliber.ge" />
    <meta property="og:image" content="{{asset('assets/img/logo/logo-sinrato2.png')}}" />
    <meta property="og:site_name" content="caliber.ge" />
    <meta property="og:type" content="website">


    <!--Fevicon-->
    <link rel="icon" href="{{asset('assets/img/icon/favicon.ico')}}" type="image/x-icon" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- linear-icon -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/linear-icon.css')}}">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- default style -->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/add_card.css')}}">

    <!-- Main Style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bpg-banner-supersquare-caps.min.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

</head>

<body>
        @yield('content')
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
        var newProduct = [];
        $('.newProduct').each(function() {
            newProduct.push($(this).height());
        });
        var samenNewProduct = Math.max.apply(null, newProduct);
        $('.newProduct').height(samenNewProduct);


        /////
        var bestProduct = [];
        $('.bestProduct').each(function() {
            bestProduct.push($(this).height());
        });
        var samenBestProduct = Math.max.apply(null, bestProduct);
        $('.bestProduct').height(samenBestProduct);


        /////
        var specialProduct = [];
        $('.specialProduct').each(function() {
            specialProduct.push($(this).height());
        });
        var sameSpecialProduct = Math.max.apply(null, specialProduct);
        $('.specialProduct').height(sameSpecialProduct);

        /////
        var newsHeight = [];
        $('.newsHeight').each(function() {
            newsHeight.push($(this).height());
        });
        var sameNewsHeight = Math.max.apply(null, newsHeight);
        $('.newsHeight').height(sameNewsHeight);
    </script>



</body>

</html>