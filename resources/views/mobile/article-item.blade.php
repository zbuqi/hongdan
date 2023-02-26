<div class="article-item">
    <a class="thumb" href="{{ $article->link }}"><img src="{{ $article->thumb }}" alt="{{ $article->title }}"/></a>
    <div class="info">
        <div class="title">
            <a href="{{ $article->link }}">

                    @if(strlen($article->title)>24)
                        {{ mb_substr($article->title,0,24,"utf-8") . '...' }}
                    @else
                        {{ $article->title }}
                    @endif
            </a>
        </div>
        <div class="meta">
            <span>{{ date('Y年m月d日',strtotime($article->created_at)) }}</span>
            <span class="glyphicon glyphicon-eye-open">{{ $article->hits }}</span>
        </div>
    </div>
</div>
