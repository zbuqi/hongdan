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

        #更新关联体育竞彩足球最新3天的赛程
        #$post_data = Matchs::update_matchs();

        #更新未来8天所有赛程赛果列表
        $time = date('Ymd', time());
        for($i=0;$i<10;$i++){
            $time_1 = strtotime($time) + $i*86400;
            $time_2 = strtotime($time) + ($i+1)*86400;
            echo $time+$i . " : " . $time_1 . "---" . $time_2;
            #print_r(ApiMatchs::where("match_time",">=", $time_1)->where("match_time","<", $time_2)->get());
            echo "<br>";
            /*
            if(ApiMatchs::where("match_time",">=", $time_1)->where("match_time","<", $time_2)->get() == ""){
                echo $time+$i . "没有数据" . "<br>";
            }else{
                echo $time+$i . "有数据" . "<br>";
            }
            */
        }
        #Matchs::update_api_matchs(20230228);



        #Match::insert($post_data);

        #Match::truncate();
        #print_r(Matchs::update_api_matchs(20230228));

        #ApiMatchs::where("match_time",">=",1677513600)->delete();
    }

}

