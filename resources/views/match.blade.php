@extends('layouts')

@section('title', '这是比赛详情页')
@section('pagename', 'match-page')

@section('content')
    <section class="match-head">
        <div class="match-head-wrap">
            <div class="match-head-content">
                <div class="head-team zhu">
                    <div class="title-wrap">
                        <div class="title">克罗地亚</div>
                        <div class="info">
                            <span>排名:22</span><span>主队</span>
                        </div>
                    </div>
                    <img src="/img/saic-head-1.png">
                    <div class="score">0</div>
                </div>
                <div class="head-info">
                    <p><span>已完场</span><span>半场：0-0</span></p>
                    <p><span>周二</span><span>世界杯 ></span></p>
                    <p><span>比赛时间：2022-12-06 23:00</span></p>
                    <a href="/">
                        <img src="/img/saic-bf-icon.png" alt="">
                        <span>动画直播</span>
                    </a>
                </div>
                <div class="head-team ke">
                    <div class="score">0</div>
                    <img src="/img/saic-head-1.png">
                    <div class="title-wrap">
                        <div class="title">克罗地亚</div>
                        <div class="info">
                            <span>排名:22</span><span>客队</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module shoufa">
        <div class="module-wrap">
            <div class="module-head clearfix">
                <div class="title"><span>首发阵容</span></div>
                <a href="/" title="">全部比赛 ></a>
            </div>
            <div class="module-content shoufa-content">
                <div class="shoufa-title clearfix">
                    <div class="col-2 zhu">
                        <p><span>阵容：4-4-2</span><span class="name">克罗地亚</span></p>
                        <p><span>球队身价：2.5亿</span><span>教练：瓦利德·雷格拉吉</span></p>
                    </div>
                    <div class="col-2 ke">
                        <p><span class="name">巴西</span><span>阵容：4-4-2</span></p>
                        <p><span>球队身价：2.5亿</span><span>教练：瓦利德·雷格拉吉</span></p>
                    </div>
                </div>
                <div class="shoufa-map">
                    <div class="shoufa-map-wrap">
                        <div class="zhu-team">
                            <div class="team-row">
                                <div class="team-user">
                                    <div class="number">1</div>
                                    <div class="name">亚新·布努</div>
                                    <div class="info"><img src="/img/hr-icon.png"></div>
                                </div>
                            </div>
                            <div class="team-row"></div>
                            <div class="team-row"></div>
                            <div class="team-row"></div>
                            <div class="team-row"></div>
                        </div>
                        <div class="ke-team">

                        </div>
                    </div>
                </div>
                <div class="shoufa-tb clearfix">
                    <div class="col-2">
                        <div class="shoufa-tb-content zhu">
                            <div class="title">克罗地亚替补</div>
                            <div class="tb-list clearfix">
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/hr-icon.png"></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/dq-icon.png"></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/hp-icon.png"></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/hr-icon.png"></a></div>
                                <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="shoufa-tb-content ke">
                            <div class="title">巴西替补</div>
                                <div class="tb-list clearfix">
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/hr-icon.png"></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/dq-icon.png"></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/hp-icon.png"></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span><img src="/img/hr-icon.png"></a></div>
                                    <div class="tb-item"><a href="/"><span>12</span><span>穆尼尔·穆罕默德</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shoufa-icon clearfix">
                    <div class="icon-item"><img src="/img/rq-icon.png" alt=""><span>入球</span></div>
                    <div class="icon-item"><img src="/img/dq-icon.png" alt=""><span>点球</span></div>
                    <div class="icon-item"><img src="/img/dq-icon.png" alt=""><span>点球</span></div>
                    <div class="icon-item"><img src="/img/dq-icon.png" alt=""><span>点球</span></div>
                    <div class="icon-item"><img src="/img/dq-icon.png" alt=""><span>点球</span></div>
                    <div class="icon-item"><img src="/img/dq-icon.png" alt=""><span>点球</span></div>
                    <div class="icon-item"><img src="/img/dq-icon.png" alt=""><span>点球</span></div>
                </div>
            </div>
        </div>
    </section>
@endsection