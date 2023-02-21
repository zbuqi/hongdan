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
                $data["match_id"] = $lottery[$i]->match_id;
                #体彩关联数据
                $data["sport_id"] = $lottery[$i]->sport_id;
                $data["lottery_type"] = $lottery[$i]->lottery_type;
                $data["issue"] = $lottery[$i]->issue;
                $data["lottery_id"] = $lottery[$i]->id;
                $data["is_same"] = $lottery[$i]->is_same;
                #判断是否有阵容
                if($data["coverage"]["lineup"] == 1){
                    #阵容
                    $lineup = MatchsApi::lineup($data["match_id"]);
                    $data["lineup_confirmed"] = $lineup->confirmed;
                    $data["home_formation"] = $lineup->home_formation;
                    $data["away_formation"] = $lineup->away_formation;
                    $data["lineup_home"] = json_encode($lineup->home, JSON_UNESCAPED_UNICODE);
                    $data["lineup_away"] = json_encode($lineup->away, JSON_UNESCAPED_UNICODE);
                }else{
                    $data["lineup_confirmed"] = null;
                    $data["home_formation"] = null;
                    $data["away_formation"] = null;
                    $data["lineup_home"] = null;
                    $data["lineup_away"] = null;
                }

                $data["updated_at"] = date("Y-m-d H:i:s",$data["updated_at"]);

                $data["home_scores"] = json_encode($data["home_scores"], JSON_UNESCAPED_UNICODE);
                $data["away_scores"] = json_encode($data["away_scores"], JSON_UNESCAPED_UNICODE);
                $data["coverage"] = json_encode($data["coverage"], JSON_UNESCAPED_UNICODE);
                $data["agg_score"] = json_encode($data["agg_score"], JSON_UNESCAPED_UNICODE);
                $data["round"] = json_encode($data["round"], JSON_UNESCAPED_UNICODE);
                if(in_array("environment", array_keys($data))){
                    $data["environment"] = json_encode($data["environment"], JSON_UNESCAPED_UNICODE);
                }else{
                    $data["environment"] = null;
                }

                unset($data["id"]);
                unset($data["status_name"]);
                unset($data["week"]);
                $post_data[$i] = $data;
            }
        }
        #print_r($post_data);
        #Match::insert($post_data);
        #Match::truncate();
        #print_r(Matchs::update_api_matchs(20230228));

        #ApiMatchs::where("match_time",">=",1677513600)->delete();
    }

}

