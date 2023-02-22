@extends('mobile.layouts')

@section('title', '赛事详情')
@section('pagename', 'match-page')

@section('content')
    <div class="match">
        <div class="match-header">
            <div class="breadcrumbs">
                <a class="back" href="/">首页</a>
                <span>></span>赛事详情
            </div>
            <div class="match-header-info">
                <div class="time">
                    <p><span>周二055</span><a href="">世界杯 ></a></p>
                    <p>2022-12-06 23:00</p>
                    <p>已完场</p>
                </div>
                <div class="troop clearfix">
                    <div class="home_team">
                        <div class="name">
                            <img src="/img/saic-head-2.png" alt="">
                            <span>克罗地亚</span>
                        </div>
                        <div class="score">0</div>
                    </div>
                    <div class="match-score"><span>半场：0-0</span></div>
                    <div class="away_team">
                        <div class="score">0</div>
                        <div class="name">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>巴西</span>
                        </div>
                    </div>
                </div>
                <div class="match-animation"><a href="/"><img src="/img/saic-bf-icon.png" alt=""><span>动画直播</span></a></div>
            </div>
            <div class="match-nav">
                <ul class="list-inline">
                    <li class="active"><a href="#shoufa">首发阵容</a></li>
                    <li><a href="#baoliao">盈球爆料</a></li>
                    <li><a href="#stjd">伤情解读</a></li>
                    <li><a href="#qdtz">球队特征</a></li>
                    <li><a href="#jqdp">精彩点评</a></li>
                </ul>
            </div>
        </div>
        <div class="match-warp">
            <section class="match-shoufa" id="shoufa">
                <div class="section-head">
                    <div class="title"><span>首发阵容</span></div>
                </div>
                <div class="section-content">
                    <div class="shoufa-map">
                        <div class="shoufa-map-head">
                            <div class="jiaolian clearfix">
                                <div class="col-3">迪迪埃▪德尚</div>
                                <div class="col-3">主教练</div>
                                <div class="col-3">瓦利德▪雷格拉吉</div>
                            </div>
                            <div class="shenjia clearfix">
                                <div class="col-3">€9.3亿</div>
                                <div class="col-3">球队身价</div>
                                <div class="col-3">€2.4亿</div>
                            </div>
                        </div>
                        <div class="shoufa-map-content">
                            <img class="qiuchang" src="/img/m-qiuchang.png" alt="">
                            <div class="qiuchang-wrap">
                                <div class="zhu-team">
                                    <div class="team-item" style="top:15%;left:15%;">
                                        <div class="team-user">
                                            <div class="number">5<span>6.26</span></div>
                                            <div class="name">儒勒▪孔德</div>
                                            <div class="info">
                                                <img src="/img/hr-icon.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ke-team">
                                    <div class="team-item" style="bottom:15%;right:15%;">
                                        <div class="team-user">
                                            <div class="number">5<span>6.26</span></div>
                                            <div class="name">儒勒▪孔德</div>
                                            <div class="info">
                                                <img src="/img/hr-icon.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shoufa-tb clearfix">
                        <div class="col-2">
                            <div class="sftb-content zhu">
                                <div class="title">克罗地亚替补</div>
                                <div class="content">
                                    <div class="sftb-item"><p><span>1</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>2</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>3</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>4</span><span>穆尼尔▪穆罕默德</span><img src="/img/hr-icon.png"></p></div>
                                    <div class="sftb-item"><p><span>5</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>6</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>7</span><span>穆尼尔▪穆罕默德</span></p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="sftb-content ke">
                                <div class="title">巴西替补</div>
                                <div class="content">
                                    <div class="sftb-item"><p><span>1</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>2</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>3</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>4</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>5</span><span>穆尼尔▪穆罕默德</span><img src="/img/hr-icon.png"></p></div>
                                    <div class="sftb-item"><p><span>6</span><span>穆尼尔▪穆罕默德</span></p></div>
                                    <div class="sftb-item"><p><span>7</span><span>穆尼尔▪穆罕默德</span></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shoufa-label clearfix">
                        <div class="sf-label-item"><img src="/img/jq-icon.png"><span>入球</span></div>
                        <div class="sf-label-item"><img src="/img/dq-icon.png"><span>点球</span></div>
                        <div class="sf-label-item"><img src="/img/ssdq-icon.png"><span>射失点球</span></div>
                        <div class="sf-label-item"><img src="/img/hr-icon.png"><span>换人</span></div>
                        <div class="sf-label-item"><img src="/img/redp-icon.png"><span>红牌</span></div>
                        <div class="sf-label-item"><img src="/img/hp-icon.png"><span>黄牌</span></div>
                        <div class="sf-label-item"><img src="/img/lh-icon.png"><span>两黄变红</span></div>
                    </div>
                </div>
            </section>
            <section class="match-baoliao" id="baoliao">
                <div class="section-head">
                    <div class="title"><span>赢球爆料</span></div>
                    <a href="">全部比赛 ></a>
                </div>
                <div class="section-content">
                    <div class="baoliao-item">
                        <div class="title">巴西球队目前没有伤停困扰，克罗地亚队长伤缺</div>
                        <div class="meta">5天前发布</div>
                        <div class="content">索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛，但是他的肌肉伤情需要被评估。</div>
                    </div>
                </div>
            </section>
            <section class="match-stjd match-qdtz" id="stjd">
                <div class="section-head">
                    <div class="title"><span>伤停解读</span></div>
                </div>
                <div class="section-content clearfix">
                    <div class="col-2">
                        <div class="stjd-content qdtz-content zhu">
                            <div class="title">克罗地亚</div>
                            <div class="content">
                                <div class="st-item tz-item">
                                    <div class="name">
                                        <span>穆尼尔▪穆罕默德</span>
                                        <span>出站成疑</span>
                                    </div>
                                    <div class="meta">
                                        <span>中场</span>
                                        <span>11场1球</span>
                                    </div>
                                </div>
                                <div class="st-item tz-item">
                                    <div class="name">
                                        <span>穆尼尔▪穆罕默德</span>
                                        <span>出站成疑</span>
                                    </div>
                                    <div class="meta">
                                        <span>中场</span>
                                        <span>33场3球</span>
                                    </div>
                                </div>
                                <div class="st-item tz-item">
                                    <div class="name">
                                        <span>穆尼尔▪穆罕默德</span>
                                        <span>受伤</span>
                                    </div>
                                    <div class="meta">
                                        <span>后卫</span>
                                        <span>33场</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="stjd-content qdtz-content ke">
                            <div class="title">巴西</div>
                            <div class="content">
                                <div class="st-item tz-item">
                                    <div class="name">
                                        <span>穆尼尔▪穆罕默德</span>
                                        <span>出站成疑</span>
                                    </div>
                                    <div class="meta">
                                        <span>后卫</span>
                                        <span>11场1球</span>
                                    </div>
                                </div>
                                <div class="st-item tz-item">
                                    <div class="name">
                                        <span>穆尼尔▪穆罕默德</span>
                                        <span>受伤</span>
                                    </div>
                                    <div class="meta">
                                        <span>中场</span>
                                        <span>33场3球</span>
                                    </div>
                                </div>
                                <div class="st-item tz-item active">
                                    <div class="name">
                                        <span>穆尼尔▪穆罕默德</span>
                                        <span>伤停</span>
                                    </div>
                                    <div class="meta">
                                        <span>前锋</span>
                                        <span>4场</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stjd-info">
                    <div class="title"><img src="/img/dq-icon.png"><span>伤停解读</span></div>
                    <div class="content">
                        <p>克罗地亚无伤病阵容，老辣的克罗地亚专心致志，而且运气也站在他们这边，低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下，实力非常强劲,这也是他们能够一路过关斩将的法宝，到目前为止他们仅丢两球，防守端很出色。</p>
                    </div>
                </div>
            </section>
            <section class="match-qdtz" id="qdtz">
                <div class="section-head">
                    <div class="title"><span>球队特征</span></div>
                </div>
                <div class="section-content clearfix">
                    <div class="col-2">
                        <div class="qdtz-content zhu">
                            <div class="title">克罗地亚</div>
                            <div class="content">
                                <div class="tz-item">
                                    <p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p>
                                </div>
                                <div class="tz-item">
                                    <p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="qdtz-content ke">
                            <div class="title">巴西</div>
                            <div class="content">
                                <div class="tz-item">
                                    <p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p>
                                </div>
                                <div class="tz-item">
                                    <p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="match-comment" id="jqdp">
                <div class="section-head comment-head">
                    <div class="title"><span>精彩点评</span></div>
                </div>
                <div class="comment-content">
                    <div class="comment-item">
                        <div class="img"><img src="/img/author.png"></div>
                        <div class="item-content">
                            <div class="meta">
                                <span class="name">路人甲</span>
                                <span class="time">2022-12-14 22:48:32</span>
                            </div>
                            <div class="info">
                                <p>克罗地亚无伤病阵容,老辣的克罗地亚专心致志,而且运气也站在他们这边,低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下,实力非常强劲,这也是他们能够</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item">
                        <div class="img"><img src="/img/author.png"></div>
                        <div class="item-content">
                            <div class="meta">
                                <span class="name">路人甲</span>
                                <span class="time">2022-12-14 22:48:32</span>
                            </div>
                            <div class="info">
                                <p>克罗地亚无伤病阵容,老辣的克罗地亚专心致志,而且运气也站在他们这边,低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下,实力非常强劲,这也是他们能够</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item">
                        <div class="img"><img src="/img/author.png"></div>
                        <div class="item-content">
                            <div class="meta">
                                <span class="name">路人甲</span>
                                <span class="time">2022-12-14 22:48:32</span>
                            </div>
                            <div class="info">
                                <p>克罗地亚无伤病阵容,老辣的克罗地亚专心致志,而且运气也站在他们这边,低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下,实力非常强劲,这也是他们能够</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="article-recomment">
                <div class="section-head recomment-head">
                    <div class="title"><span>推荐文章</span></div>
                </div>
                <div class="recomment-body">
                    <?php foreach($latestArticles as $article):?>
                    @includeIf('mobile.article-item')
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $(function(){
            var width = 0;
            $(".match-nav li").each(function(){
                width += 4;
                width += $(this).outerWidth(true);
                $(this).click(function(){
                    $(this).addClass('active').siblings().removeClass('active');
                });
            });
            $(".match-nav ul").css('width',width);
        });
    </script>
@endsection
