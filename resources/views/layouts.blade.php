<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <script type="text/javascript" src="/js/jquery-3.6.3.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    </head>
    <body class="@yield('pagename')">
        <header>
            <div class="container">
                <div class="nav-logo">
                    <a href="/"><img src="{{ $site->logo }}"></a>
                </div>
                <nav class="navbar-nav">
                    @foreach($navs as $item)
                    <a href="{{ $item->link }}">{{ $item->title }}</a>
                    @endforeach
                </nav>
                <div class="visitor">
                    <a class="btn btn-default login" href="/admin">登录</a>
                    <a class="btn btn-default">注册</a>
                </div>
                <div class="top-kefu">
                    <div class="kefu-icon"><img src="/img/zx-icon.png"></div>
                    <div class="kefu-btn">
                        <div class="phone">{{ $consult->phone }}</div>
                        <a class="btn btn-default">
                            <img src="/img/wx-icon.png">
                            <span>微信咨询</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="wrap">
            <div class="container">
                <div class="content-wrap">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-link">
                <div class="footer-container clearfix">
                    @foreach($footerlinks as $item)
                    <div class="link-item">
                        <h4 class="title">{{ $item->title }}</h4>
                        <ul class="list-unstyled">
                            @foreach($item->son as $son)
                            <li><a href="{{ $son->link }}">{{ $son->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    <div class="footer-contact clearfix">
                        <div class="contace-item contace-content clearfix">
                            <div class="contace-icon">
                                <img src="/img/phone.png" alt="">
                            </div>
                            <div class="contace-main">
                                <p class="phone">{{ $consult->phone }}</p>
                                <p class="time">服务时间 {{ $consult->time }}</p>
                                <div class="contace-btn">
                                    <a href="" target="_blank">联系微信管家</a>
                                </div>
                            </div>
                        </div>
                        <div class="contace-item">
                            <img src="{{ $consult->woa1 }}" alt="">
                            <p>{{ $consult->woa1_title }}</p>
                        </div>
                        <div class="contace-item">
                            <img src="{{ $consult->woa2 }}" alt="">
                            <p>{{ $consult->woa2_title }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="footer-container">
                    <p>
                        Copyright © 2023 <span>{{ $site->copyright }}</span>
                        ICP证： <a href="{{ $site->put_on_record_link }}" target="_blank">{{ $site->put_on_record }}</a>
                    </p>
                </div>
            </div>
        </footer>
        @yield('javascript')
        @yield('js')
    </body>
</html>
