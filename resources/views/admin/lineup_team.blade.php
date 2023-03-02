<div class="team-content">
    <div class="title"></div>
    <div class="list clearfix">
@foreach($team as $item)
    <div class="item">
        <div>
        <span>{{ $item->shirt_number }}</span>
        <span>{{ $item->name }}</span>
        @if(property_exists($item,'incidents'))
            @for($i=0;$i<count($item->incidents);$i++)
                @foreach($reasons as $reason)
                    @if($reason->id == $item->incidents[$i]->reason_type)
                        <img src="/img/{{ $reason->img }}">
                     @endif
                @endforeach
            @endfor
        @endif
        </div>
    </div>
@endforeach
    </div>
</div>
<style>
    .team-content .title{
        color: #666;
        border-bottom: 1px solid #dbe3e6;
        font-size: 18px;
        line-height: 27px;
        font-weight: 900;
        padding-bottom: 8px;
    }
    .team-content .item{
        width: 50%;
        float: left;
    }
    .team-content .item:nth-child(odd){
        padding-right: 24px;
    }
    .team-content .item>div{
        padding: 8px 0;
        border-bottom: 1px solid #eeeeee;
    }
    .team-content .item span{
        display: inline-block;
    }
    .team-content .item span:first-child {
        color: #b3b3b3;
        font-size: 14px;
        line-height: 22px;
    }
    .team-content .item span:nth-child(2) {
        font-size: 16px;
        line-height: 24px;
        margin-left: 16px;
    }
    .team-content .item img{
        width: 24px;
        height: 24px;
        float: right;

    }
</style>
