<div class="team-content">
    <div class="title">球员列表</div>
    <div class="list clearfix">
    @foreach($lineup_team->team as $item)
    <div class="item">
        <div>
        <span>{{ $item->shirt_number }}</span>
        <span>{{ $item->name }}</span>
        @if(property_exists($item,'incidents'))

                @foreach($lineup_team->reasons as $reason)
                    @if($reason->id == $item->incidents[0]->reason_type)
                        <img src="/img/{{ $reason->img }}">
                     @endif
                @endforeach

        @endif
        <a class="btn-xs" href="/admin/match/{{ $lineup_team->match_id }}/{{ $lineup_team->team_code }}/{{ $item->id }}/edit">编辑</a>
        </div>
    </div>
    @endforeach
    </div>
</div>
<style>
.team-content{

}
    .team-content .title{
        color: #414750;
        border-bottom: 1px solid #dbe3e6;
        font-size: 16px;
        line-height: 27px;
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
        margin-left:10px;
    }
    .team-content .item a{
        float:right;
    }
</style>
