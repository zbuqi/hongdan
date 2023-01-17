<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/moblie-style.css">
        <script type="text/javascript" src="/js/jquery-3.6.3.min.js"></script>
    </head>
    <body class="@yield('pagename')">
        <header>
            <div class="header-logo"><a href="/"><img src="/img/logo.png"></a></div>
            <div class="navbar-mobile"><a class="navbar-mobile-more"><i class="glyphicon glyphicon-th-list"></i></a></div>
        </header>

        @yield('content')


        @yield('javascript')
        @yield('js')
    </body>
</html>