<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Match;
use App\Models\ApiMatchs;
use App\Http\Repositories\Lottery;
use App\Http\Repositories\Matchs;
use App\Http\Repositories\MatchsApi;

class MatchPostController extends Controller
{
    public function show(){
        $matchs = new Matchs();

        #更新关联体育竞彩足球最新3天的赛程
        #$matchs->update_matchs();

        #更新未来8天所有赛程赛果列表
        #$matchs->update_api_matchs();






        #删除所有数据
        #Match::truncate();

        #删除指定数据
        #ApiMatchs::where("match_time",">=",1677513600)->delete();
    }

}

