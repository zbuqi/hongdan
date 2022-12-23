<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="@yield('pagename')">
        <header>
            <div class="container">
            <div class="nav-logo">
                <a href="/"><img src="/img/logo.png"></a>
            </div>
            <nav class="navbar-nav">
                <a href="/">首页</a>
                <a href="/">足球</a>
                <a href="/">篮球</a>
                <a href="/">比分预测</a>
                <a href="/category/ces">体育资讯</a>
                <a href="/article/1">文章页</a>
            </nav>
            <div class="top-kefu">
                <div class="kefu-icon"><img src="/img/zx-icon.png"></div>
                <div class="kefu-btn">
                    <div class="phone">（0760）88485154</div>
                    <a class="btn btn-default">
                        <img src="/img/wx-icon.png">
                        <span>微信咨询</span>
                    </a>
                </div>
            </div>
            <div class="visitor">
                <a class="btn btn-default login">登录</a>
                <a class="btn btn-default">注册</a>
            </div>
            </div>
        </header>
        <div class="wrap">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class=""></div>
        </footer>
    </body>
</html>