<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Match;
use App\Http\Repositories\Lottery;
use App\Http\Repositories\Matchs as MatchsApi;

class MatchPostController extends Controller
{
    public function show(){
        $lottery = Lottery::index(101,1);
        $issues = [];
        $match_ids = [];
        for($i=0;$i<count($lottery);$i++){
            if(!in_array($lottery[$i]->issue,$issues)){
                $issues[] = $lottery[$i]->issue;
            }
            for($x=0; $x<count($issues); $x++){
                if($lottery[$i]->issue == $issues[$x]){
                    $match_ids[$issues[$x]][] = $lottery[$i]->match_id;
                }
            }
            #echo "序号：" . $i . "比赛Id：" . $lottery[$i]->match_id . "， 彩票期号：" . $lottery[$i]->issue . "， 主队名称：" . $lottery[$i]->home_name . "， 客队名称：" . $lottery[$i]->away_name . "<br>";
        }
        $matchs = MatchsApi::index($match_ids);
        print_r($matchs);
        /*
        for($i=0; $i<count($matchs); $i++){
            echo $matchs[$i]->id . ":" . $matchs[$i]->home_team_name . "<br>";
        }
        */

    }

}

