@extends('mobile.layouts')

@section('title', $title . " - " . $site->site_name)
@section('keywords', $keywords)
@section('description', $description)
@section('pagename', 'category-page')

@section('content')
    <div class="category">
        <div class="breadcrumbs">
            <a class="back" href="/">首页</a>
            @if($category)
                <span>></span><a href="{{ $category->link }}">{{ $category->name }}</a>
            @else
                <span>></span><a href="/category">资讯</a>
            @endif
            <span>></span>文章详情
        </div>
        <div class="category-warp">
        <?php foreach($latestArticles as $article):?>
            @includeIf('mobile.article-item')
        <?php endforeach; ?>
        </div>
        <div class="up-down">
            @if($page->prev != "")
            <a href="{{ $page->prev }}">上一页</a>
            @endif
            @if($page->next != "")
            <a href="{{ $page->next }}">下一页</a>
            @endif
        </div>
    </div>
@endsection
