<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags" />
    <meta name="twitter:creator" content="@themetags" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Hostim - Hosting Service Provider HTML Template" />
    <meta name="twitter:description" content="Hosting Services HTML Template, software technology, agency & business Bootstrap 5 Html template. It is best and famous hosting services company website template." />
    <meta name="twitter:image" content="#" />

    <!--facebook og-->
    <meta property="og:url" content="#" />
    <meta name="twitter:title" content="Hostim - Hosting Service Provider HTML Template" />
    <meta property="og:description" content="Hostim Services HTML Template, software technology, agency & business Bootstrap 5 Html template. It is best and famous hosting services company website template." />
    <meta property="og:image" content="#" />
    <meta property="og:image:secure_url" content="#" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />

    <!--meta-->
    <meta name="description" content="Hostim - Hosting Services HTML Template, software technology, agency & business Bootstrap 5 Html template. It is best and famous hosting services company website template." />
    <meta name="author" content="ThemeTags" />

    <!--favicon icon-->
    <link rel="icon" href="resources/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Node & Validator VietNam</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&family=Urbanist:wght@600;700&display=swap" rel="stylesheet">

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('../../assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('../../assets/css/custom.css') }}">

</head>
<body>
            @include('element.header')
            @include('element.preload')
            @include('element.heroPage')
            @yield('main')
            @include('element.footer')
            @include('element.gotop')
            @include('element.Js')
    </body>
</html>
