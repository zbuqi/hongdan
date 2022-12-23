<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="">
    </head>
    <body class="@yield('pagename')">
        <header>
            <div class="nav-logo">
                <a href="/"><img src=""></a>
            </div>
            <nav>
                <a href="/">首页</a>
                <a href="/">足球</a>
                <a href="/">篮球</a>
                <a href="/">比分预测</a>
                <a href="/category/ces">体育资讯</a>
                <a href="/article/1">文章页</a>
            </nav>
            <div class="top-kefu">

            </div>
            <div class="">
            
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