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

        $lottery = Lottery::index(101,1);
        $post_data = [];
        for($i=0;$i<count($lottery);$i++){
            $match = ApiMatchs::where("match_id", $lottery[$i]->match_id)->first();
            if($match != ""){
                $data = json_decode($match->value,true);
                #体彩关联数据
                $data["sport_id"] = $lottery[$i]->sport_id;
                $data["lottery_type"] = $lottery[$i]->lottery_type;
                $data["issue"] = $lottery[$i]->issue;
                $data["lottery_id"] = $lottery[$i]->id;
                $data["is_same"] = $lottery[$i]->is_same;
                $post_data[$i] = $data;
                #判断是否有阵容
                if($data["coverage"]["lineup"] == 1){
                    #阵容
                    $lineup = MatchsApi::lineup($data->id);
                    $data["lineup_confirmed"] = $lineup->confirmed;
                    $data["home_formation"] = $lineup->home_formation;
                    $data["away_formation"] = $lineup->away_formation;
                    $data["lineup_home"] = json_encode($lineup->home, JSON_UNESCAPED_UNICODE);
                    $data["lineup_away"] = json_encode($lineup->away, JSON_UNESCAPED_UNICODE);
                }else{
                    $data["lineup_confirmed"] = "";
                    $data["home_formation"] = "";
                    $data["away_formation"] = "";
                    $data["lineup_home"] = "";
                    $data["lineup_away"] = "";
                }
            }
        }
        #print_r($post_data);
        #Match::insert($post_data);

        #print_r(Matchs::update_api_matchs(20230228));

        #ApiMatchs::where("match_time",">=",1677513600)->delete();
    }

}

