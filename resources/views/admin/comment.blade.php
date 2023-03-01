
<div class="comment">
    @foreach($comment as $item)
        <div class="comment-item clearfix">
            <div class="img"><img src="/img/author.png"></div>
            <div class="item-content">
                <div class="meta">
                    <span class="name">路人甲</span>
                    <span class="time">{{$item->created_at}}</span>
                </div>
                <div class="info">{!! $item->content !!}</div>
            </div>
            <div class="btn-right"><button class="btn default-btn">编辑</button></div>
        </div>
    @endforeach
</div>
<style>
    .comment{
        margin:0 5%;
    }
    .comment-item{
        border-bottom:1px solid #eeeeee;
        padding: 24px 0;
    }
    .comment-item .img{
        float: left;
    }
    .comment-item .img img{
        width: 56px;
        height: 56px;
        border-radius: 4px;
    }
    .item-content {
        width:80%;
        float:left;
        margin-left: 24px;
    }
    .item-content .meta {
        font-size: 14px;
        line-height: 22px;
        margin-bottom: 16px;
    }
    .item-content .meta .name {
        color: #191e2b;
        margin-right: 16px;
        display: inline-block;
    }
    .item-content .meta .time {
        color: #b3b3b3;
        display: inline-block;
    }
    .item-content .info p {
        font-size: 14px;
        color: #191e2b;
        line-height: 22px;
        margin: 0;
    }
    .btn-right{
        float:right;
        margin:16px 0;
    }
</style>


