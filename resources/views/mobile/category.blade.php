@extends('mobile\layouts')

@section('title', '分类页')
@section('pagename', 'category-page')

@section('content')
    <div class="category">
        <div class="breadcrumbs">
            <a class="back" href="/">首页</a>
            <span>></span><a href="">资讯</a>
            <span>></span>文章详情
        </div>
        <div class="category-warp">
        <?php foreach($latestArticles as $article):?>
        @includeIf('mobile.article-item')
        <?php endforeach; ?>
        </div>
        <div class="up-down">
            <a href="">上一页</a>
            <a href="">下一页</a>
        </div>
    </div>
@endsection
