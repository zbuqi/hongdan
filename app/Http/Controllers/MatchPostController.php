<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Matchs;

use App\Models\Match;
use App\Models\ApiMatchs;
use App\Http\Middleware\SeoPush;
use App\Http\Middleware\MatchDataUpdata;

class MatchPostController extends Controller
{
    public function show(){
        $matchs = new Matchs();
        $updata = new MatchDataUpdata();

        #更新未来8天所有赛程赛果列表
        #echo $updata->update_api_matchs(20230301);

        #更新关联体育竞彩足球最新3天的赛程
        #echo $updata->update_matchs();






        
        #更新未来8天所有赛程赛果列表
        #$matchs->update_api_matchs();
        #更新关联体育竞彩足球最新3天的赛程
        #$matchs->update_matchs();
        #删除所有数据
        #Match::truncate();
        #删除指定数据
        #ApiMatchs::where("match_time",">=",1677513600)->delete();
    }
    public function baidu_ts(){
        $seo_push = new SeoPush();

        #百度推送文章页
        $seo_push->baidu_ts_articles();
        #百度推送赛程详情页
        $seo_push->baidu_ts_matchs();
    }

}

