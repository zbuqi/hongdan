<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body class="@yield('pagename')">
        <header>
            <nav>
                <a href="/">首页</a>
                <a href="/category/ces">分类页</a>
                <a href="/article/1">文章页</a>
            </nav>
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