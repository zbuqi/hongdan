
@extends('mobile\layouts')

@section('title', '这是首页')
@section('pagename', 'home-page')

@section('content')
    <div class="home">
        <section class="home-banner">
            <div id="myCarousel" class="carousel slide" data-interval="5000">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img decoding="async" src="/img/m-banner.png" alt="First slide">
                    </div>
                    <div class="item">
                        <img decoding="async" src="/img/m-banner.png" alt="Second slide">
                    </div>
                    <div class="item">
                        <img decoding="async" src="/img/m-banner.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </section>
        <section class="home-nav">
            <div class="home-nav-wrap clearfix">
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-jd-icon.png" />
                        <p>世界杯解读</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-jd-icon.png" />
                        <p>大神排行</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-jd-icon.png" />
                        <p>夺冠指数</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-jd-icon.png" />
                        <p>32强解密</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-jd-icon.png" />
                        <p>比分直播</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="home-article">
            <div class="section-head">
                <div class="title"><span>每天赛程</span></div>
                <a href="">更多 ></a>
            </div>
            <div class="section-content">
                <ul class="list-unstyled">
                    <li><a href="">7日V先生解球：公推冲3连红+收3个2串1！尤文vs乌迪内斯</a></li>
                    <li><a href=""><span>V先生谈球</span>8日鬼手谈球：再红两个2串1+北单3场全中！A</a></li>
                    <li><a href=""><span>V先生谈球</span>8日年叔说球：公推近6中5！私料再收两单2串</a></li>
                    <li><a href=""><span>V先生谈球</span>世界杯揭幕战卡塔尔告负;长江口二号古船成功</a></li>
                    <li><a href=""><span>V先生谈球</span>各有滋味在其中 回顾北京日报社32年世界杯报</a></li>
                </ul>
            </div>
        </section>
        <section class="home-wanghong">
            <div class="section-head">
                <div class="title"><span>网红计划单</span></div>
                <a href="">全部 ></a>
            </div>
            <div class="section-content">
                <div class="card-wrap">
                    <ul class="list-inline clearfix">
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="home-zhuanjia">
            <div class="section-head">
                <div class="title"><span>专家排行榜</span></div>
                <a href="">全部 ></a>
            </div>
            <div class="section-content">
                <div class="card-wrap">
                    <ul class="list-inline clearfix">
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                        <li>
                            <div class="card-item">
                                <div class="user-img"><img src="/img/user-head.png"><span>10连红</span></div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="home-footer-nav">
            <div class="footer-nav-wrap clearfix">
                <div class="col-5">
                    <a class="footer-nav-item"><img src="/img/phone.png"><p>首页</p></a>
                </div>
                <div class="col-5">
                    <a class="footer-nav-item"><img src="/img/phone.png"><p>足球</p></a>
                </div>
                <div class="col-5">
                    <a class="footer-nav-item"><img src="/img/phone.png"><p>篮球</p></a>
                </div>
                <div class="col-5">
                    <a class="footer-nav-item"><img src="/img/phone.png"><p>预测</p></a>
                </div>
                <div class="col-5">
                    <a class="footer-nav-item"><img src="/img/phone.png"><p>资讯</p></a>
                </div>
            </div>
        </section>

    </div>












@endsection
@section('javascript')
    <script type="text/javascript">
        $(function(){
            /*轮播图*/
            var down_x = '';
            $("#myCarousel").carousel('cycle');
            $("#myCarousel").mousedown(function(e){
                down_x = e.pageX;
            });
            $("#myCarousel").mouseup(function(e){
                var up_x = e.pageX;
                if(down_x - up_x > 0){
                    $("#myCarousel").carousel('next');
                }else{
                    $("#myCarousel").carousel('prev');
                }
            });
            /*卡片计划单*/
            var wh_width = 0;
            var zj_width = 0;
            $(".home-wanghong .section-content .card-wrap li").each(function(){
                //width += 4;
                wh_width += $(this).outerWidth(true);
            });
            $(".home-wanghong .card-wrap ul").css('width',wh_width);

            $(".home-zhuanjia .section-content .card-wrap li").each(function(){
                //width += 4;
                zj_width += $(this).outerWidth(true);
            });
            $(".home-zhuanjia .card-wrap ul").css('width',zj_width);
        });
    </script>
@endsection


