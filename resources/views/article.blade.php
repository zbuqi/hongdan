@extends('layouts')

@section('title', $article->title . " - " . $site->site_name)
@section('keywords', $article->title)
@section('description', $article->excerpt)
@section('pagename', 'article-page')

@section('content')
    <div class="article">
        <div class="breadcrumbs">
            <a class="back" href="/"><span>←</span>首页</a>
            <span>></span>
            <a href="{{ $category->link }}">{{ $category->name }}</a>
            <span>></span>
            文章详情
        </div>
        <div class="article-wrap clearfix">
            <div class="col-4-b">
                <div class="article-main">
                    <div class="article-head">
                        <h1 class="title">{{ $article->title }}</h1>
                        <div class="meta">
                            <span>用户名：李白本</span>
                            <span>{{ $article->created_at }}</span>
                            <span>栏目：<a href="{{ $category->link }}">{{ $category->name }}</a></span>
                        </div>
                    </div>
                    <div class="artcle-body">{!! $article->body !!}</div>
                    <div class="up-down">
                        @if($article->last)
                            <a href="{{ $article->last }}">上一篇</a>
                        @endif
                        @if($article->next)
                            <a href="{{ $article->next }}">下一篇</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-4-x">
                <div class="article-sidebar">
                    <div class="sidebar-title">
                        <div class="title"><span>热门推荐</span></div>
                    </div>
                    <div class="sidebar-content">
                        @foreach($latestArticles as $article)
                        <div class="article-sidebar-item">
                            <a class="thumb" href="{{ $article->link }}"><img src="{{ $article->thumb }}"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="{{ $article->link }}">{{ Str::limit($article->title, 32, '...') }}</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {!! $adv->ces !!}
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="article-recomment">
                    <div class="recomment-head">
                        <div class="title"><span>相关推荐</span></div>
                    </div>
                    <div class="recomment-body clearfix">
                        <?php foreach($correlationsArticles as $article):?>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="<?php echo $article->link; ?>"><img src="<?php echo $article->thumb; ?>" alt=""></a>
                                <div class="title"><a href="<?php echo $article->link; ?>"><?php echo $article->title; ?></a></div>
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
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
