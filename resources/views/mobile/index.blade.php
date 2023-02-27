
@extends('mobile.layouts')

@section('title', $site->site_name . ' - ' . $site->site_subtitle)
@section('keywords', $site->seo_keywords)
@section('description', $site->seo_description)
@section('pagename', 'mbile-home-page')

@section('content')
    <div class="home">
        <section class="home-banner">
            <div id="myCarousel" class="carousel slide" data-interval="5000">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    @foreach($banners as $key=>$item)
                    <li data-target="#myCarousel" data-slide-to="{{ $key }}"></li>
                    @endforeach
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    @foreach($banners as $key=>$item)
                    <div class="item">
                        <a href="{{ $item->link }}">
                            <img decoding="async" src="{{ $item->image }}" alt="First slide">
                        </a>
                    </div>
                    @endforeach
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
                        <img src="/img/nav-ph-icon.png" />
                        <p>大神排行</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-zs-icon.png" />
                        <p>夺冠指数</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-jm-icon.png" />
                        <p>32强解密</p>
                    </a>
                </div>
                <div class="col-5">
                    <a class="nav-item">
                        <img src="/img/nav-zb-icon.png" />
                        <p>比分直播</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="home-match">
            <div class="section-head">
                <div class="title"><span>每天赛程</span></div>
                <a href="">全部比赛 ></a>
            </div>
            <div class="section-content">
                <div class="home-match-wrap">
                    <div class="home-match-nav">
                        <ul class="list-inline clearfix">
                            @foreach($matchs as $item)
                                @if($item)
                                    @if(!property_exists($item, 'err'))
                            <li>
                                <div class="item">
                                    <span>{{ $item->week }}</span>
                                    <span>{{ date('d', $item->time) }}</span>
                                </div>
                            </li>
                                    @else
                                        <p>{{ $item->err }}</p>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="home-match-content">
                        @foreach($matchs as $item)
                            @if($item)
                                @if(!property_exists($item, 'err'))
                        <div class="item">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th><span>{{ $item->status_name }}</span></th>
                                        <th><span>场次</span></th>
                                        <th><span>胜/平/负</span></th>
                                        <th><span>进/失</span></th>
                                        <th><span>积分</span></th>
                                    </tr>
                                    <tr>
                                        <td><div class="name"><img src="{{ $item->home_team_logo }}"><span>{{ $item->home_team_name }}</span></div></td>
                                        <td><span>0</span></td>
                                        <td><span>0</span></td>
                                        <td><span>0</span></td>
                                        <td><span>0</span></td>
                                    </tr>
                                    <tr>
                                        <td><div class="name"><img src="{{ $item->away_team_logo }}"><span>{{ $item->away_team_name }}</span></div></td>
                                        <td><span>0</span></td>
                                        <td><span>0</span></td>
                                        <td><span>0</span></td>
                                        <td><span>0</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="item-footer">
                                @if($item->coverage->mlive)
                                <span><img src="/img/saic-bf-icon.png"><span>动画</span></span>
                                @endif
                                <span>暂无推荐</span>
                            </div>
                        </div>
                                @else
                                    <tr>{{ $item->err }}</tr>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="home-zhishu">
            <div class="section-head">
                <div class="title"><span>夺冠指数</span></div>
                <a href="">全部 ></a>
            </div>
            <div class="section-content">
                <div class="zhishu-wrap clearfix">
                    <div class="col-2-zs-x">
                        <a class="zhishu-item">
                            <img src="/img/saic-head-1.png">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                        <a class="zhishu-item">
                            <img src="/img/saic-head-1.png">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2-zs-b">
                        <a class="zhishu-item-jm">
                            <div class="item-title">32强深度解密</div>
                            <p>红单密码，这里全都有</p>
                            <img src="/img/zt-icon-3.png">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-article">
            <div class="section-head">
                <div class="title"><span>每天赛程</span></div>
                <a href="/category">更多 ></a>
            </div>
            <div class="section-content">
                <ul class="list-unstyled">
                    <?php foreach($latestArticles as $article): ?>
                    <li><a href="<?php echo $article->link;?>"><span><?php echo $article->source; ?></span><?php echo $article->title; ?></a></li>
                    <?php endforeach;?>
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
                <?php foreach($mobilenavs as $item): ?>
                    <div class="col-5">
                        <a class="footer-nav-item" href="{{ $item->link }}"><img src="{{ $item->img }}"><p>{{ $item->title }}</p></a>
                    </div>
                <?php endforeach; ?>
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
            $(".carousel-indicators li").eq(0).addClass("active");
            $(".carousel-inner .item").eq(0).addClass("active");
            /*每天赛程*/
            $(".home-match-nav li").eq(0).addClass("active");
            $(".home-match-content .item").eq(0).addClass("active");
            $(".home-match-nav li").each(function(index){
                $(this).click(function(){
                    $(this).addClass('active').siblings().removeClass('active');
                    $(".home-match-content .item").eq(index).addClass('active').siblings().removeClass('active');
                })
            })

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

            /*底部导航*/
            $(".footer-nav-wrap>div").eq(0).children(".footer-nav-item").addClass("active");
        });
    </script>
@endsection


