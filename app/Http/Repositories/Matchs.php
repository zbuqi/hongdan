<?php
namespace App\Http\Repositories;

use App\Http\Repositories\MatchsApi;
use App\Models\Seting;

class Matchs
{
    public function show($date){
        $data = MatchsApi::matchs($date);
        /*判断是否出错，出错返回出错信息*/
        if(property_exists($data, "err")){
            return $data->err;
        }
        $matchs = $data->results->match;
        $competitions = $data->results->competition;
        $teams = $data->results->team;
        $status = Seting::where('name','match-status')->first()->value;
        $status = json_decode($status);

        for($i=0;$i<count($matchs);$i++){
            /*星期*/
            $week = array('天','一','二','三','四','五','六');
            $matchs[$i]->week = '周' . $week[date('w', $matchs[$i]->match_time)];

            /*球队信息*/
            foreach($teams as $team){
                if($matchs[$i]->home_team_id == $team->id){
                    $matchs[$i]->home_team_name = $team->name;
                    $matchs[$i]->home_team_logo = $team->logo;
                }elseif($matchs[$i]->away_team_id == $team->id){
                    $matchs[$i]->away_team_name = $team->name;
                    $matchs[$i]->away_team_logo = $team->logo;
                }
            }
            /*赛事信息*/
            foreach($competitions as $competition){
                if($matchs[$i]->competition_id == $competition->id){
                    $matchs[$i]->competition_name = $competition->name;
                    $matchs[$i]->competition_logo = $competition->logo;
                }
            }
            /*比赛状态*/
            foreach($status as $statu){
                if($matchs[$i]->status_id == $statu->id){
                    $matchs[$i]->status_name = $statu->name;
                }
            }
        }
        #$content = collect($matchs)->where('id','3747925')->all();
        return $matchs;
    }
    public function index($data){
        $content = [];

        foreach($data as $key => $item){
            $date = 20 . $key;
            $matchs = Matchs::show($date);
            for($i=0;$i<count($item);$i++){
                echo $item[$i];
                echo "<br>";
                $content[] = collect($matchs)->where('id',$item[$i])->all();
            }
            echo "<br>";
        }
        #$content[] = collect($matchs)->where('id', 3755028)->all();

        $match = Matchs::show(20230218);
        print_r($match);


        #return $content;
    }
}
