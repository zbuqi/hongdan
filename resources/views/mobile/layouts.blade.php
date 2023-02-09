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
    <body class="mobile @yield('pagename')">
        <header class="header container">
            <div class="header-logo"><a href="/"><img src="/img/logo.png"></a></div>
            <div class="nav-mobile-more"><img src="/img/menu-icon.png" alt=""></div>
            <div class="nav-wrap">
                <div class="nav-close"><img src="/img/close-icon.png"></div>
                <ul class="nav-link list-unstyled">
                    <li><a href="">首页</a></li>
                    <li>
                        <a>体育工具服务<img class="unfold" src="/img/unfold-icon.png"></a>
                        <ul class="nav-link-sublevel list-unstyled">
                            <li><a href="">比分直播</a></li>
                            <li><a href="">赛事数据</a></li>
                            <li><a href="">情报咨询</a></li>
                            <li><a href="">专家推荐</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">服务与支持<img class="unfold" src="/img/unfold-icon.png"></a>
                        <ul class="nav-link-sublevel list-unstyled">
                            <li><a href="">下载网单盈球</a></li>
                            <li><a href="">帮助中心</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="contact-warp clearfix">
                    <div class="contact-item col-xs-6">
                        <img src="/uploads/2023-02-04/414ce96359d5cbf938ff60cf12c8b80b.png" alt="" />
                        <p>红单网公众号</p>
                    </div>
                    <div class="contact-item col-xs-6">
                        <img src="/uploads/2023-02-04/414ce96359d5cbf938ff60cf12c8b80b.png" alt="">
                        <p>红单网公众号</p>
                    </div>
                    <div class="contact-item col-xs-12 clearfix">
                        <div class="contact-icon"><img src="/img/phone-icon.png"></div>
                        <div class="contact-main">
                            <p class="phone">(0756)  61611588</p>
                            <p class="time">服务时间 09:00-18:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-wrap-bg"></div>
        </header>

        @yield('content')


        @yield('javascript')
        @yield('js')
        <script>
            $(function(){
                $(".nav-mobile-more").click(function(){
                    $(".nav-wrap").addClass("active");
                    $(".nav-wrap-bg").addClass("active");
                })
                $(".nav-close img").click(function(){
                    $(".nav-wrap").removeClass("active");
                    $(".nav-wrap-bg").removeClass("active");
                })
                $(".nav-wrap-bg").click(function(){
                    $(".nav-wrap").removeClass("active");
                    $(".nav-wrap-bg").removeClass("active");
                })

                $(".nav-link > li a img.unfold").click(function(){
                    var nav_sublevel = $(this).closest("li").children('ul');
                    if($(this).closest("li").hasClass("active")){
                        $(this).closest("li").removeClass("active");
                    }else{
                        $(this).closest("li").addClass("active");
                    }
                })
            })
        </script>
    </body>
</html>
