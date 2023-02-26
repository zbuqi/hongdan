@extends('layouts')

@section('title', $title . " - " . $site->site_name)
@section('keywords', $keywords)
@section('description', $description)
@section('pagename', 'category-page')

@section('content')
    <div class="categoty">
        <div class="breadcrumbs">
            <a class="back" href="/"><span>←</span>首页</a>
            <span>></span>
            <a href="/category">资讯</a>
            @if($category)
            <span>></span>
                {{ $category->name }}
            @endif
        </div>
        <div class="category-wrap clearfix">
            <div class="col-4-b">
                <div class="category-content">
                    @foreach($latestArticles as $article)
                    <div class="article-item">
                        <div class="content clearfix">
                            <a class="thumb" href="{{ $article->link }}" title=""><img src="{{ $article->thumb }}" alt=""></a>
                            <div class="info">
                                <h2 class="title"><a href="{{ $article->link }}" title="">{{ $article->title }}</a></h2>
                                <div class="excerpt">{{ $article->excerpt }}</div>
                            </div>
                        </div>
                        <div class="meta">
                            <a class="post-like" href="">赞同<span>156</span></a>
                            <a class="comments" href="">147条评论</a>
                            <a class="collect" href="/">收藏</a>
                            <div class="meta-right">
                                <span class="author">新京报社官方账号</span>
                                <span class="time">{{ $article->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="page-number clearfix">
                        <div class="content">
                            <a class="page-up" href="?page=1"><</a>
                                @foreach($page as $item)
                                    <a @if($item == $page->current)class="active"@endif href="?page={{$item}}">{{$item}}</a>
                                @endforeach
                            <a class="page-down" href="?page={{$page->last}}">></a>
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
                        @foreach($featureArticles as $article)
                        <div class="article-sidebar-item">
                            <a class="thumb" href="{{ $article->link }}"><img src="{{ $article->thumb }}"></a>
                            <div class="info">
                                <div class="title">
                                    <a href="{{ $article->link }}">{{ $article->title }}</a>
                                </div>
                                <div class="meta">
                                    <span>体育发飙季</span>
                                    <span>3评论</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
