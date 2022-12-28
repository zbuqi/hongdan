
@extends('layouts')

@section('title', '这是首页')
@section('pagename', 'home-page')

@section('content')
    <section class="zhuanti clearfix">
        <div class="col-1-x">
            <div class="zhuanti-main clearfix">
                <h2 class="title padd-4">2022卡塔尔世界杯</h2>
                <div class="col-2 padd-4">
                    <a class="zt-item icon-1" href="">
                        <div class="item-title">世界杯解读</div>
                        <p>专家助你红单</p>
                    </a>
                </div>
                <div class="col-2 padd-4">
                    <a class="zt-item icon-2" href="">
                        <div class="item-title">大神排行</div>
                        <p>世界杯擂台赛</p>
                    </a>
                </div>
                <div class="col-2 padd-4">
                    <a class="zt-item icon-3" href="">
                        <div class="item-title">夺冠指数</div>
                        <p>冠军实时更新</p>
                    </a>
                </div>
                <div class="col-2 padd-4">
                    <a class="zt-item icon-4" href="">
                        <div class="item-title">32强解密</div>
                        <p>红单密码在手</p>
                    </a>
                </div>
                <div class="col-1 padd-4">
                    <a class="zt-zb-item icon-5" href="">
                        <div class="item-title">比分直播</div>
                        <p>世界杯赛事动画比分直播</p>
                    </a>
                </div>
                <div class="col-1 padd-4">
                    <div class="zhuanti-btn">
                        <a href="">进入世界杯专题</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1-b">
            <div class="zhuanti-banner">
                <a href="/"><img src="/img/zt-banner.png"></a>
            </div>
        </div>
    </section>
    <section class="saic clearfix">
        <div class="col-1-b">
            <div class="saic-main">
                <div class="saic-title clearfix">
                    <h2 class="title"><span>每天赛程</span></h2>
                    <a href="">全部比赛 ></a>
                </div>
                <div class="content">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="sai-item">
                                <td class="item-info clearfix" rowspan="2">
                                    <div class="time">
                                        <p>12月03日</p>
                                        <p>周日 23: 00</p>
                                    </div>
                                    <div class="fenge"></div>
                                    <div class="start"><span>已完场</span></div>
                                    <div class="sai-user user-1">
                                        <div class="name">克罗地亚</div>
                                        <div class="img"><img src="/img/saic-head-1.png" alt=""></div>
                                    </div>
                                    <div class="sai-user user-2">
                                        <div class="img"><img src="/img/saic-head-2.png" alt=""></div>
                                        <div class="name">巴西</div>
                                    </div>
                                    <div class="sai-video">
                                        <a href=""><img src="/img/saic-bf-icon.png"><span>动画</span></a>
                                    </div>
                                </td>
                                <td class="score">0</td>
                                <td class="infos"><span>8.10</span><span>4.50</span><span>1.26</span></td>
                                <td class="recom" rowspan="2"><div><a href="">72位专家推荐 ></a></div></td>
                            </tr>
                            <tr class="sai-item">
                                <td class="score">+1</td>
                                <td class="infos"><span>8.10</span><span>4.50</span><span>1.26</span></td> 
                            </tr>
                            <tr class="sai-item active">
                                <td class="item-info clearfix" rowspan="2">
                                    <div class="time">
                                        <p>12月03日</p>
                                        <p>周日 23: 00</p>
                                    </div>
                                    <div class="fenge"></div>
                                    <div class="start"><span>已完场</span></div>
                                    <div class="sai-user user-1">
                                        <div class="name">克罗地亚</div>
                                        <div class="img"><img src="/img/saic-head-1.png" alt=""></div>
                                    </div>
                                    <div class="sai-user user-2">
                                        <div class="img"><img src="/img/saic-head-2.png" alt=""></div>
                                        <div class="name">巴西</div>
                                    </div>
                                    <div class="sai-video">
                                        <a href=""><img src="/img/saic-bf-icon.png"><span>动画</span></a>
                                    </div>
                                </td>
                                <td class="score">0</td>
                                <td class="infos"><span>8.10</span><span>4.50</span><span>1.26</span></td>
                                <td class="recom" rowspan="2"><div><a href="">72位专家推荐 ></a></div></td>
                            </tr>
                            <tr class="sai-item active">
                                <td class="score">+1</td>
                                <td class="infos"><span>8.10</span><span>4.50</span><span>1.26</span></td> 
                            </tr>
                            <tr class="sai-item not">
                                <td class="item-info clearfix" rowspan="2">
                                    <div class="time">
                                        <p>12月03日</p>
                                        <p>周日 23: 00</p>
                                    </div>
                                    <div class="fenge"></div>
                                    <div class="start"><span>已完场</span></div>
                                    <div class="sai-user user-1">
                                        <div class="name">
                                            第三场<br>
                                            1/4决赛<br>
                                            胜者
                                        </div>
                                        <div class="img"><img src="/img/saic-head.png" alt=""></div>
                                    </div>
                                    <div class="sai-user user-2">
                                        <div class="img"><img src="/img/saic-head.png" alt=""></div>
                                        <div class="name">
                                            第三场<br>
                                            1/4决赛<br>
                                            胜者
                                        </div>
                                    </div>
                                    <div class="sai-video">
                                        <a href=""><img src="/img/saic-bf-icon.png"><span>动画</span></a>
                                    </div>
                                </td>
                                <td class="score">-</td>
                                <td class="infos"><span>-</span><span>-</span><span>-</span></td>
                                <td class="recom" rowspan="2"><div><span>暂无推荐 </span></div></td>
                            </tr>
                            <tr class="sai-item not">
                                <td class="score">-</td>
                                <td class="infos"><span>-</span><span>-</span><span>-</span></td> 
                            </tr>
                            <tr class="sai-item not">
                                <td class="item-info clearfix" rowspan="2">
                                    <div class="time">
                                        <p>12月03日</p>
                                        <p>周日 23: 00</p>
                                    </div>
                                    <div class="fenge"></div>
                                    <div class="start"><span>已完场</span></div>
                                    <div class="sai-user user-1">
                                        <div class="name">
                                            第三场<br>
                                            1/4决赛<br>
                                            胜者
                                        </div>
                                        <div class="img"><img src="/img/saic-head.png" alt=""></div>
                                    </div>
                                    <div class="sai-user user-2">
                                        <div class="img"><img src="/img/saic-head.png" alt=""></div>
                                        <div class="name">
                                            第三场<br>
                                            1/4决赛<br>
                                            胜者
                                        </div>
                                    </div>
                                    <div class="sai-video">
                                        <a href=""><img src="/img/saic-bf-icon.png"><span>动画</span></a>
                                    </div>
                                </td>
                                <td class="score">-</td>
                                <td class="infos"><span>-</span><span>-</span><span>-</span></td>
                                <td class="recom" rowspan="2"><div><span>暂无推荐</span></div></td>
                            </tr>
                            <tr class="sai-item not">
                                <td class="score">-</td>
                                <td class="infos"><span>-</span><span>-</span><span>-</span></td> 
                            </tr>
                            <tr class="sai-item not">
                                <td class="item-info clearfix" rowspan="2">
                                    <div class="time">
                                        <p>12月03日</p>
                                        <p>周日 23: 00</p>
                                    </div>
                                    <div class="fenge"></div>
                                    <div class="start"><span>已完场</span></div>
                                    <div class="sai-user user-1">
                                        <div class="name">
                                            第三场<br>
                                            1/4决赛<br>
                                            胜者
                                        </div>
                                        <div class="img"><img src="/img/saic-head.png" alt=""></div>
                                    </div>
                                    <div class="sai-user user-2">
                                        <div class="img"><img src="/img/saic-head.png" alt=""></div>
                                        <div class="name">
                                            第三场<br>
                                            1/4决赛<br>
                                            胜者
                                        </div>
                                    </div>
                                    <div class="sai-video">
                                        <a href=""><img src="/img/saic-bf-icon.png"><span>动画</span></a>
                                    </div>
                                </td>
                                <td class="score">-</td>
                                <td class="infos"><span>-</span><span>-</span><span>-</span></td>
                                <td class="recom" rowspan="2"><div><span>暂无推荐</span></div></td>
                            </tr>
                            <tr class="sai-item not">
                                <td class="score">-</td>
                                <td class="infos"><span>-</span><span>-</span><span>-</span></td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-1-x">
            <div class="saic-sidebar">
                <div class="saic-sidebar-title clearfix">
                    <div class="title">
                        <span>夺冠指数</span>
                        <span>实时更新</span>
                    </div>
                    <a href="/" alt="">全部 ></a>
                </div>
                <div class="saic-sidebar-content clearfix">
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="content-item" href="/">
                            <img src="/img/saic-head-1.png" alt="">
                            <span>克罗地亚</span>
                            <span>2.60</span>
                        </a>
                    </div>
                    <div class="col-1">
                        <a class="content-item-jm" href="/">
                            <div class="item-title">32强深度解密</div>
                            <p>红单密码，这里全都有</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="saic-zx clearfix">
        <div class="col-2-b">
            <a class="saic-zx-img" href="/">
                <img src="/img/article-top.png">
                <p>克罗地亚0-0比利时 欧洲红魔回家！</p>
            </a>
        </div>
        <div class="col-2-x">
            <div class="saic-zx-main">
                <div class="saic-zx-title clearfix">
                    <div class="title"><span>每天赛程</span></div>
                    <a href="/">更多 ></a>
                </div>
                <div class="saic-zx-content">
                    <ul class="list-unstyled">
                        <li><a href=""><span></span>V先生解球：世界杯1/4决赛今晚开战！赛前：荷兰vs阿根廷</a></li>
                        <li><a href=""><span>知名推手</span>11日鬼手：公推32中22！小联赛6对5！</a></li>
                        <li><a href=""><span>顶级高手</span>11日鬼手：公推32中22！小联赛6对5！</a></li>
                        <li><a href=""><span>曾哥聊球</span>11日鬼手：公推32中22！小联赛6对5！</a></li>
                        <li><a href=""><span>红单专栏</span>11日鬼手：公推32中22！小联赛6对5！</a></li>
                        <li><a href=""><span></span>V先生解球：世界杯1/4决赛今晚开战！赛前：荷兰vs阿根廷</a></li>
                        <li><a href=""><span>篮球资讯</span>11日鬼手：公杯1/4决杯1/4决推32中22！小联赛6对5！</a></li>
                        <li><a href=""><span>篮球资讯</span>11日鬼手：公推32中22！小联赛6对5！</a></li>
                        <li><a href=""><span>红单数据库</span>11日鬼手：公推32中22！小联赛6对5！</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="whzj">
        <div class="whzj-main clearfix">
            <div class="col-3-b">
                <div class="wh-jhd whzj-module">
                    <div class="whzj-module-title clearfix">
                        <div class="title"><span>网红计划单</span></div>
                        <a href="/">全部 ></a>
                    </div>
                    <div class="whzj-module-content clearfix">
                        <div class="col-4">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3-x">
                <div class="zj-ph whzj-module">
                    <div class="whzj-module-title clearfix">
                        <div class="title"><span>足球专家排行</span></div>
                        <a href="/">全部 ></a>
                    </div>
                    <div class="whzj-module-content clearfix">
                        <div class="col-3">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="whzj-item">
                                <div class="user-img">
                                    <img src="/img/user-head.png">
                                    <span>10连红</span>
                                </div>
                                <p>Kop欧文</p>
                                <p>1篇在售解读</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


