
@extends('mobile.layouts')

@section('title', $article->title . " - " . $site->site_name)
@section('keywords', $article->title)
@section('description', $article->excerpt)
@section('pagename', 'article-page')

@section('content')
<div class="article">
    <div class="breadcrumbs">
        <a class="back" href="/">首页</a>
        <span>></span><a href="{{ $category->link }}">{{ $category->name }}</a>
        <span>></span>文章详情
    </div>
    <div class="article-head">
        <h1 class="title">{{ $article->title }}</h1>
        <div class="meta">
            <span>用户名：李白本</span>
            <span>{{ $article->created_at }}</span>
            <span>栏目：<a href="{{ $category->link }}">{{ $category->name }}</a></span>
        </div>
    </div>
    <div class="article-body">{!! $article->body !!}</div>
    <div class="up-down">
        @if($article->last)
        <a href="{{ $article->last }}">上一篇</a>
        @endif
        @if($article->next)
        <a href="{{ $article->next }}">下一篇</a>
        @endif

    </div>
    <div class="article-recomment">
        <div class="recomment-head">
            <div class="title"><span>推荐文章</span></div>
        </div>
        <div class="recomment-body">
            @foreach($correlationsArticles as $article)
                @includeIf('mobile.article-item')
            @endforeach
        </div>
    </div>
</div>
@endsection
