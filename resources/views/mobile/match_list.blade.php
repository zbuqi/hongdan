@extends('mobile.layouts')

@section('title', '赛事列表')
@section('pagename', 'match-list-page')

@section('content')
    <div class="match-list">
        <div class="breadcrumbs">
            <a class="back" href="/">首页</a>
            <span>></span><a href="">赛程</a>
        </div>
        @foreach($matchs as $match_list)
        <div class="match-list-warp">
            <div class="match-list-module">
                <div class="module-title">
                    <div class="on-off">
                        <span>收起</span>
                    </div>
                    <span>{{ $match_list->time }}</span>
                    <span>{{ $match_list->week }}</span>
                </div>
                @if($match_list->content)
                    @if(!property_exists($match_list->content[0], 'err'))
                        @foreach($match_list->content as $key=>$match)
                        <div class="list-item">
                            <a href="/match/{{ $match->id }}.html">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>{{ $match->competition_name }}</th>
                                        <th>胜</th>
                                        <th>平</th>
                                        <th>负</th>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ $match->home_team_logo }}"><span>{{ $match->home_team_name }}</span></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ $match->away_team_logo }}"><span>{{ $match->away_team_name }}</span></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="list-item-meta">
                                <span>{{ $match->status_name }}</span>
                                <div class="time">
                                    <span>{{ $match_list->week }}{{ str_pad($key+1, 3, '0', STR_PAD_LEFT) }}</span>
                                    <span>{{ date('m-d H-i', $match->match_time) }}</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    @else
                        <tr>{{ $match_list->content[0]->err }}</tr>
                    @endif
                @endif
            </div>
        </div>
        @endforeach
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $(function(){
            $(".match-list-module .module-title .on-off").click(function(){
                if(!$(this).hasClass("off")){
                    $(this).addClass("off");
                    $(this).contents().text('展开');
                    $(this).closest(".match-list-module").addClass("off");
                }else{
                    $(this).removeClass("off");
                    $(this).contents().text('收起');
                    $(this).closest(".match-list-module").removeClass("off");
                }
            });
        });
    </script>
@endsection
