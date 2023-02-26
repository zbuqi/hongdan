@extends('layouts')

@section('title', $title . " - " . $site->site_name)
@section('keywords', $keywords)
@section('description', $description)

@section('pagename', 'match-page')

@section('content')
    <section class="match-head">
        <div class="match-head-wrap">
            <div class="match-head-content">
                <div class="head-team zhu">
                    <div class="title-wrap">
                        <div class="title">{{ $match->home_team_name }}</div>
                        <div class="info"><span>排名:{{ $match->home_position }}</span><span>主队</span></div>
                    </div>
                    <img src="{{ $match->home_team_logo }}">
                    <div class="score">0</div>
                </div>
                <div class="head-info">
                    <p><span>{{ $match->status_name }}</span><span>半场：0-0</span></p>
                    <p><span>{{ $match->week }}</span><span>{{ $match->competition_name }} ></span></p>
                    <p><span>比赛时间：{{ $match->match_time }}</span></p>
                    <a href="/">
                        <img src="/img/saic-bf-icon.png" alt="">
                        <span>动画直播</span>
                    </a>
                </div>
                <div class="head-team ke">
                    <div class="score">0</div>
                    <img src="{{ $match->away_team_logo }}">
                    <div class="title-wrap">
                        <div class="title"><?php echo $match->away_team_name; ?></div>
                        <div class="info">
                            <span>排名:<?php echo $match->away_position; ?></span><span>客队</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php if($lineup != ""): ?>
    <section class="module shoufa">
        <div class="module-wrap">
            <div class="module-head clearfix">
                <div class="title"><span>首发阵容</span></div>
                <a href="/" title="">全部比赛 ></a>
            </div>
            <div class="module-content shoufa-content">
                <div class="shoufa-title clearfix">
                    <div class="col-2 zhu">
                        <p><span>阵容：<?php echo $lineup->home_formation; ?></span><span class="name"><?php echo $match->home_team_name; ?></span></p>
                        <p><span>球队身价：2.5亿</span><span>教练：瓦利德·雷格拉吉</span></p>
                    </div>
                    <div class="col-2 ke">
                        <p><span class="name"><?php echo $match->away_team_name; ?></span><span>阵容：<?php echo $lineup->away_formation; ?></span></p>
                        <p><span>球队身价：2.5亿</span><span>教练：瓦利德·雷格拉吉</span></p>
                    </div>
                </div>
                <div class="shoufa-map">
                    <div class="shoufa-map-wrap">
                        <div class="zhu-team col-2">
                            <?php foreach($lineup->home->team as $user):?>
                            <div class="team-item" style="left:<?php echo $user->y;?>%; top:<?php echo $user->x;?>%;">
                                <div class="team-user">
                                    <div class="number"><?php echo $user->shirt_number; ?></div>
                                    <div class="name"><?php echo $user->name; ?></div>
                                    <?php if(property_exists($user, 'incidents')):?>
                                    <?php if(property_exists($user->incidents[count($user->incidents)-1], 'reason_img')):?>
                                    <div class="info">
                                        <img src="<?php echo '/img/' . $user->incidents[count($user->incidents)-1]->reason_img;?>">
                                    </div>
                                    <?php endif;?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <div class="ke-team col-2">
                            <?php foreach($lineup->away->team as $user):?>
                            <div class="team-item" style="right:<?php echo $user->y;?>%; bottom:<?php echo $user->x;?>%;">
                                <div class="team-user">
                                    <div class="number"><?php echo $user->shirt_number; ?></div>
                                    <div class="name"><?php echo $user->name; ?></div>
                                    <?php if(property_exists($user, 'incidents')):?>
                                    <?php if(property_exists($user->incidents[count($user->incidents)-1], 'reason_img')):?>
                                    <div class="info">
                                        <img src="<?php echo '/img/' . $user->incidents[count($user->incidents)-1]->reason_img;?>">
                                    </div>
                                    <?php endif;?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="shoufa-tb clearfix">
                    <div class="col-2">
                        <div class="shoufa-tb-content zhu">
                            <div class="title"><?php echo $match->home_team_name; ?>替补</div>
                            <div class="tb-list clearfix">
                                <?php foreach($lineup->home->alterbate as $user):?>
                                <div class="tb-item">
                                    <a href="/">
                                        <span><?php echo $user->shirt_number; ?></span>
                                        <span><?php echo $user->name; ?></span>
                                        <?php if(property_exists($user, 'incidents')):?>
                                        <?php if(property_exists($user->incidents[count($user->incidents)-1], 'reason_img')):?>
                                        <img src="<?php echo '/img/' . $user->incidents[count($user->incidents)-1]->reason_img;?>">
                                        <?php endif;?>
                                        <?php endif;?>
                                    </a>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="shoufa-tb-content ke">
                            <div class="title"><?php echo $match->away_team_name; ?>替补</div>
                            <div class="tb-list clearfix">
                                <?php foreach($lineup->away->alterbate as $user):?>
                                <div class="tb-item">
                                    <a href="/">
                                        <span><?php echo $user->shirt_number; ?></span>
                                        <span><?php echo $user->name; ?></span>
                                        <?php if(property_exists($user, 'incidents')):?>
                                        <?php if(property_exists($user->incidents[count($user->incidents)-1], 'reason_img')):?>
                                        <img src="<?php echo '/img/' . $user->incidents[count($user->incidents)-1]->reason_img;?>">
                                        <?php endif;?>
                                        <?php endif;?>
                                    </a>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shoufa-icon clearfix">
                    <?php foreach($lineup->reason_type as $reason_type):?>
                    <div class="icon-item"><img src="<?php echo '/img/' . $reason_type->img; ?>" alt=""><span><?php echo $reason_type->name; ?></span></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
<section class="module baoliao">
    <div class="module-wrap">
        <div class="module-head clearfix">
            <div class="title"><span>赢球爆料</span></div>
            <a href="/match_list/zuqiu">全部比赛 ></a>
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
            <?php foreach($latestArticles as $article): ?>
            <div class="col-4">
                <div class="recomment-item">
                    <a class="thumb" href="<?php echo $article->link; ?>"><img src="<?php echo $article->thumb; ?>" alt=""></a>
                    <div class="title"><a href="<?php echo $article->link; ?>"><?php echo $article->title; ?></a></div>
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
            <?php endforeach; ?>
        </div>
    </div>
</section>
@endsection
