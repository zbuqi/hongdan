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
                    <a href="/article/1">比分预测</a>
                    <a href="/category/ces">体育资讯</a>
                </nav>
                <div class="visitor">
                    <a class="btn btn-default login">登录</a>
                    <a class="btn btn-default">注册</a>
                </div>
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
                    <div class="link-item">
                        <h4 class="title">体育工具服务</h4>
                        <ul class="list-unstyled">
                            <li><a href="">比分直播</a></li>
                            <li><a href="">赛事数据</a></li>
                            <li><a href="">情报资讯</a></li>
                            <li><a href="">专家推荐</a></li>
                        </ul>
                    </div>
                    <div class="link-item">
                        <h4 class="title">服务与支持</h4>
                        <ul class="list-unstyled">
                            <li><a href="">下载网单盈球</a></li>
                            <li><a href="">帮助中心</a></li>
                        </ul>
                    </div>
                    <div class="footer-contact clearfix">
                        <div class="contace-item contace-content clearfix">
                            <div class="contace-icon">
                                <img src="/img/phone.png" alt="">
                            </div>
                            <div class="contace-main">
                                <p class="phone">(0756) &nbsp;61611588</p>
                                <p class="time">服务时间 09:00-18:00</p>
                                <div class="contace-btn">
                                    <a href="" target="_blank">联系微信管家</a>
                                </div>
                            </div>
                        </div>
                        <div class="contace-item">
                            <img src="/img/wx.png" alt="">
                            <p>红单网公众号</p>
                        </div>
                        <div class="contace-item">
                            <img src="/img/wx.png" alt="">
                            <p>红单网公众号</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="footer-container">
                    <p>Copyright © 2022 <span>XXXX网络技术有限公司</span> ICP证： <a href="https://beian.miit.gov.cn" target="_blank">渝ICP备2022009971号</a></p>
                </div>
            </div>
        </footer>
    </body>
</html>