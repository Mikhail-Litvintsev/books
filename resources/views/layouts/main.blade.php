<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <meta property="og:title" content="@yield('title')">

    <meta name="description" content="@yield('description')">
    <meta property="og:description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">

    <meta property="og:url" content="https://www.books.dom-mastera.ru/">
    <link rel="canonical" href="https://books.dom-mastera.ru/">
    <link rel="shortlink" href="https://books.dom-mastera.ru/">

    <link rel="icon" href="{{ asset('/image/favicon.png') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

@include('includes.announcement')

<header>
    <div class="mr-xl-3 ml-xl-3 mr-lg-3 ml-lg-3 ml-md-5 ml-sm-2">

        @include('includes.navbar')

    </div>
</header>

<div class="row @yield('big-banner-class') mw-100">
    <div class="col text-center big-banner-content" style="vertical-align: middle">

        @yield('banner-search')

    </div>
</div>

<div class="container" style="margin-bottom: 100px">

    @yield('content')

</div>

<footer class="footer">
    <div>
        {{ __('Copyright ') }}
        <i class="far fa-copyright"></i>
        {!! now()->year !!}
        {{ __(' Букинист') }}
    </div>
</footer>

</body>

</html>
