@extends('layouts')

@section('title', '这是文章页')
@section('pagename', 'article-page')

@section('content')
    <div class="article">
        <div class="breadcrumbs">
            <a class="back" href="/"><span>←</span>首页</a>
            <span>></span>
            <a href="/">资讯</a>
            <span>></span>
            文章详情
        </div>
        <div class="article-wrap clearfix">
            <div class="col-4-b">
                <div class="article-main">
                    <div class="article-head">
                        <h1 class="title">克罗地亚0-0比利时 欧洲红魔回家！</h1>
                        <div class="meta">
                            <span>用户名：李白本</span>
                            <span>2018-08-08 14:55</span>
                            <span>栏目：<a href="">XXX</a></span>
                        </div>
                    </div>
                    <div class="artcle-body">
                        <p>北京时间12月1日，世界杯小组赛第三轮F组两场比赛同时进行。目前积4分并且凭借净胜球优势排名第一的克罗地亚迎战小组第三的比利时队，而同样积4分排名第二的摩洛哥队对阵垫底的加拿大队。除了两战皆墨的加拿大队之外，克罗地亚、摩洛哥和比利时都有机会出线。</p>
                        <img src="/img/article-top.png" alt="">
                        <p>北京时间12月1日，世界杯小组赛第三轮F组两场比赛同时进行。目前积4分并且凭借净胜球优势排名第一的克罗地亚迎战小组第三的比利时队，而同样积4分排名第二的摩洛哥队对阵垫底的加拿大队。除了两战皆墨的加拿大队之外，克罗地亚、摩洛哥和比利时都有机会出线。</p>
                    </div>
                    <div class="up-down">
                        <a href="">上一篇</a>
                        <a href="">下一篇</a>
                    </div>
                </div>
            </div>
            <div class="col-4-x">
                <div class="article-sidebar">
                    <div class="sidebar-title">
                        <div class="title"><span>热门推荐</span></div>
                    </div>
                    <div class="sidebar-content">
                        <div class="article-sidebar-item">
                            <a class="thumb" href=""><img src="/img/thumb-2.png"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="/">荷乙17轮前瞻：兹沃勒迎来昔日克星...</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-sidebar-item">
                            <a class="thumb" href=""><img src="/img/thumb-2.png"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="/">荷乙17轮前瞻：兹沃勒迎来昔日克星...</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-sidebar-item">
                            <a class="thumb" href=""><img src="/img/thumb-2.png"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="/">荷乙17轮前瞻：兹沃勒迎来昔日克星...</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-sidebar-item">
                            <a class="thumb" href=""><img src="/img/thumb-2.png"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="/">荷乙17轮前瞻：兹沃勒迎来昔日克星...</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-sidebar-item">
                            <a class="thumb" href=""><img src="/img/thumb-2.png"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="/">荷乙17轮前瞻：兹沃勒迎来昔日克星...</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="article-recomment">
                    <div class="recomment-head">
                        <div class="title"><span>相关推荐</span></div>
                    </div>
                    <div class="recomment-body clearfix">
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2-1.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-4.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-5.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection