
@extends('layouts')

@section('title', '这是首页')
@section('pagename', 'home-page')

@section('content')
    <section class="zhuanti">
        <div class="col-1-x padd-12">
            <div class="zhuanti-main padd-12 clearfix">
                <h2 class="title padd-4">2022卡塔尔世界杯</h2>
                <div class="col-2 padd-4">
                    <div class="zt-item">
                        <div class="item-title">世界杯解读</div>
                        <p>专家助你红单</p>
                    </div>
                </div>
                <div class="col-2 padd-4">
                    <div class="zt-item">
                        <div class="item-title">大神排行</div>
                        <p>世界杯擂台赛</p>
                    </div>
                </div>
                <div class="col-2 padd-4">
                    <div class="zt-item">
                        <div class="item-title">夺冠指数</div>
                        <p>冠军实时更新</p>
                    </div>
                </div>
                <div class="col-2 padd-4">
                    <div class="zt-item">
                        <div class="item-title">32强解密</div>
                        <p>红单密码在手</p>
                    </div>
                </div>
                <div class="col-1 padd-4">
                    <div class="zt-zb-item">
                        <div class="item-title">比分直播</div>
                        <p>世界杯赛事动画比分直播</p>
                    </div>
                </div>
                <div class="col-1 padd-4">
                    <div class="zhuanti-btn">
                        <a href="">进入世界杯专题</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1-b padd-12">
            <div class="zhuanti-banner">
                <a href=""><img src="/img/zt-banner.png"></a>
            </div>
        </div>
    </section>
@endsection


