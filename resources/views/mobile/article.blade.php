
@extends('mobile\layouts')

@section('title', '文章页')
@section('pagename', 'home-page')

@section('content')
<div class="article">
    <div class="breadcrumbs">
        <a class="back" href="/">首页</a>
        <span>></span><a href="">资讯</a>
        <span>></span>文章详情
    </div>
    <div class="article-head">
        <h1 class="title"><?php echo $article->title; ?></h1>
        <div class="meta">
            <span>用户名：李白本</span>
            <span><?php echo $article->created_at; ?></span>
            <span>栏目：<a href="<?php echo $category->link; ?>"><?php echo $category->name; ?></a></span>
        </div>
    </div>
    <div class="article-body"><?php echo $article->body; ?></div>
    <div class="up-down">
        <a href="<?echo $article->last; ?>">上一篇</a>
        <a href="<?echo $article->next; ?>">下一篇</a>
    </div>
    <div class="article-recomment">
        <div class="recomment-head">
            <div class="title"><span>推荐文章</span></div>
        </div>
        <div class="recomment-body">
            <?php foreach($correlationsArticles as $article):?>
            <div class="article-item">
                <a class="thumb" href="<?php echo $article->link; ?>"><img src="<?php echo $article->thumb; ?>" alt="<?php echo $article->title; ?>"/></a>
                <div class="info">
                    <div class="title"><a href="<?php echo $article->link; ?>"><?php echo $article->title; ?></a></div>
                    <div class="meta">
                        <span><?php echo date('Y年m月d日',strtotime($article->created_at)); ?></span>
                        <span class="glyphicon glyphicon-eye-open"><?php echo $article->hits; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
@endsection
