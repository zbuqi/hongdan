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
                    <div class="info"><span>排名:22</span><span>主队</span></div>
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
<section class="module baoliao">
    <div class="module-wrap">
        <div class="module-head clearfix">
            <div class="title"><span>赢球爆料</span></div>
            <a href="/">全部比赛 ></a>
        </div>
        <div class="module-content baoliao-main clearfix">
            <div class="col-2">
                <div class="baoliao-item zhu">
                    <div class="title">克罗地亚</div>
                    <div class="baoliao-item-content">
                        <p>索萨在对阵日本的淘汰赛没有出现在阵容中,但是他有望竞争本场首发斯坦尼西奇同样缺席了上场比赛，但是他的肌肉伤情需要被评估</p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="baoliao-item ke">
                    <div class="title">巴西</div>
                    <div class="baoliao-item-content">
                        <p>桑德罗缺席了对阵喀麦隆和韩国的比赛,他臀部受伤球员状况需要在赛前进行评估</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="module baoliao baoliao-2">
    <div class="module-wrap">
        <div class="module-head clearfix">
            <div class="title"><span>赢球爆料</span></div>
            <a href="/">全部比赛 ></a>
        </div>
        <div class="module-content baoliao-main clearfix">
            <div class="col-2">
                <div class="baoliao-item zhu">
                    <div class="title">克罗地亚</div>
                    <div class="baoliao-item-content">
                        <p>索萨在对阵日本的淘汰赛没有出现在阵容中,但是他有望竞争本场首发斯坦尼西奇同样缺席了上场比赛，但是他的肌肉伤情需要被评估</p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="baoliao-item ke">
                    <div class="title">巴西</div>
                    <div class="baoliao-item-content">
                        <p>桑德罗缺席了对阵喀麦隆和韩国的比赛,他臀部受伤球员状况需要在赛前进行评估</p>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="stjd">
                    <div class="title">
                        <img src="/img/st-icon.png" alt="">
                        <div>伤停解读</div>
                    </div>
                    <div class="content">
                        <p>克罗地亚无伤病阵容，老辣的克罗地亚专心致，而月运气也站在他们这边，低调的克罗地亚人仿佛梦回2018，克罗地亚中场在莫德里奇，布罗，维奇，科瓦契奇的领衔下，实力非常强劲,这也是他们能够一路过关斩将的法宝,到目前为止他们仅丢两球,防守端很出色,巴西热苏斯已经伤别世界杯,本场后卫桑德罗出战成疑,巴西仍是本届世界杯最大的热门,本场占据着天赋和阵容上绝对优势,内马尔的复出对球队是一剂强心剂,他的绝对核心作用太重要，锋线上的维尼修斯也亟待进球证明自己，尽管克罗地亚有优秀的中场,但是巴西人仍将主导占据,克罗地亚本场防守端压力极大,到底能“拖住”桑巴军多长时间?将影响最终战局</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="module qiudui">
    <div class="module-wrap">
        <div class="module-head clearfix">
            <div class="title"><span>球队特征</span></div>
            <a href="/">全部比赛 ></a>
        </div>
        <div class="module-content qiudui-main clearfix">
            <div class="col-2">
                <div class="qiudui-tz-content zhu">
                    <div class="title">克罗地亚</div>
                    <div class="tz-list clearfix">
                        <div class="tz-item"><p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p></div>
                        <div class="tz-item"><p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p></div>
                        <div class="tz-item"><p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>索萨在对阵日本的淘汰赛没有出现在阵容中，但是他有望竞争本场首发 斯坦尼西奇同样缺席了上场比赛,但是他的肌肉伤情需要被评估</p></div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="qiudui-tz-content ke">
                    <div class="title">巴西</div>
                    <div class="tz-list clearfix">
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                        <div class="tz-item"><p>穆尼尔·穆罕默德</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="jingcai">
    <div class="jingcai-head">
        <div class="title"><span>精彩点评</span></div>
    </div>
    <div class="jingcai-content">
        <div class="dp-item">
            <div class="img"><img src="/img/author.png"></div>
            <div class="item-content">
                <div class="meta">
                    <span class="name">路人甲</span>
                    <span class="time">2022-12-14 22:48:32</span>
                </div>
                <div class="info">
                    <p>克罗地亚无伤病阵容,老辣的克罗地亚专心致志,而且运气也站在他们这边,低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下,实力非常强劲,这也是他们能够一路过关斩将的法宝,到目前为止他们仅丢两球,防守端很出色。巴西热苏斯已经伤别世界杯,本场后卫桑德罗出战成疑,巴西仍是本届世界杯最大的热门,本场占据着天赋和阵容上绝对优势,内马尔的复出对球队是一剂强心剂,他的绝对核心作用太重要,锋线上的维尼修斯也亟待进球证明自己,尽管克罗地亚有优秀的中场,但是巴西人仍将主导占据，克罗地亚本场防守端压力极大，到底能“拖住”桑巴军多长时间？将影响最终战局</p>
                </div>
            </div>
        </div>
        <div class="dp-item">
            <div class="img"><img src="/img/author.png"></div>
            <div class="item-content">
                <div class="meta">
                    <span class="name">路人甲</span>
                    <span class="time">2022-12-14 22:48:32</span>
                </div>
                <div class="info">
                    <p>克罗地亚无伤病阵容,老辣的克罗地亚专心致志,而且运气也站在他们这边,低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下,实力非常强劲,这也是他们能够一路过关斩将的法宝,到目前为止他们仅丢两球,防守端很出色。巴西热苏斯已经伤别世界杯,本场后卫桑德罗出战成疑,巴西仍是本届世界杯最大的热门,本场占据着天赋和阵容上绝对优势,内马尔的复出对球队是一剂强心剂,他的绝对核心作用太重要,锋线上的维尼修斯也亟待进球证明自己,尽管克罗地亚有优秀的中场,但是巴西人仍将主导占据，克罗地亚本场防守端压力极大，到底能“拖住”桑巴军多长时间？将影响最终战局</p>
                </div>
            </div>
        </div>
        <div class="dp-item">
            <div class="img"><img src="/img/author.png"></div>
            <div class="item-content">
                <div class="meta">
                    <span class="name">路人甲</span>
                    <span class="time">2022-12-14 22:48:32</span>
                </div>
                <div class="info">
                    <p>克罗地亚无伤病阵容,老辣的克罗地亚专心致志,而且运气也站在他们这边,低调的克罗地亚人仿佛梦回2018,克罗地亚中场在莫德里奇、布罗佐维奇、科瓦契奇的领衔下,实力非常强劲,这也是他们能够一路过关斩将的法宝,到目前为止他们仅丢两球,防守端很出色。巴西热苏斯已经伤别世界杯,本场后卫桑德罗出战成疑,巴西仍是本届世界杯最大的热门,本场占据着天赋和阵容上绝对优势,内马尔的复出对球队是一剂强心剂,他的绝对核心作用太重要,锋线上的维尼修斯也亟待进球证明自己,尽管克罗地亚有优秀的中场,但是巴西人仍将主导占据，克罗地亚本场防守端压力极大，到底能“拖住”桑巴军多长时间？将影响最终战局</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="match-article-recomment">
                <div class="article-recomment">
                    <div class="recomment-head">
                        <div class="title"><span>相关推荐</span></div>
                    </div>
                    <div class="recomment-body clearfix">
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2-1.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-4.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-5.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="recomment-item">
                                <a class="thumb" href="/article/5"><img src="/img/thumb-2.png" alt=""></a>
                                <div class="title"><a href="/article/5">卡塔尔世界杯|C罗转身离去</a></div>
                                <div class="meta clearfix">
                                    <div class="author">
                                        <img src="/img/author.png" alt="">
                                        <span>中国新闻网</span>
                                    </div>
                                    <div class="post-like">
                                        <img src="/img/like-icon.png" alt="">
                                        <span>275</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
</section>
@endsection