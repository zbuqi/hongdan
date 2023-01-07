@extends('layouts')

@section('title', '这是分类页')
@section('pagename', 'category-page')

@section('content')
    <div class="categoty">
        <div class="breadcrumbs">
            <a class="back" href="/"><span>←</span>首页</a>
            <span>></span>
            资讯
        </div>
        <div class="category-wrap clearfix">
            <div class="col-4-b">
                <div class="category-content">
                    <?php foreach($latestArticles as $article): ?>
                    <div class="article-item">
                        <div class="content clearfix">
                            <a class="thumb" href="/article/1" title=""><img src="<?php echo $article->thumb; ?>" alt=""></a>
                            <div class="info">
                                <h2 class="title"><a href="<?php echo $article->link; ?>" title=""><?php echo $article->title; ?></a></h2>
                                <div class="excerpt"><?php echo $article->excerpt; ?></div>
                            </div>
                        </div>
                        <div class="meta">
                            <a class="post-like" href="">赞同<span>156</span></a>
                            <a class="comments" href="">147条评论</a>
                            <a class="collect" href="/">收藏</a>
                            <div class="meta-right">
                                <span class="author">新京报社官方账号</span>
                                <span class="time">2022-12-07</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="page-number clearfix">
                        <div class="content">
                            <a class="page-up" href=""><</a>
                            <a class="active" href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="">5</a>
                            <a>…</a>
                            <a href="">9</a>
                            <a class="page-down" href="">></a>
                        </div>
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
        </div>
    </div>
@endsection