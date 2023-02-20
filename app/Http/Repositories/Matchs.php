<?php
namespace App\Http\Repositories;

use App\Http\Repositories\MatchsApi;
use App\Models\Seting;
use App\Models\ApiMatchs;

class Matchs
{
    public function show($date){
        $data = MatchsApi::matchs($date);
        /*判断是否出错，出错返回出错信息*/
        if(property_exists($data, "err")){
            return $data;
        }
        if(property_exists($data, "msg")){
            return $data;
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
        return $matchs;
    }
    public function update_api_matchs($date){
        $matchs = Matchs::show($date);
        $time = date("Y-m-d H:i:s",time());
        $post_data = [];
        for($i=0;$i<count($matchs);$i++) {
            $post_data[$i]["match_id"] = $matchs[$i]->id;
            $post_data[$i]["match_time"] =  $matchs[$i]->match_time;
            $post_data[$i]["value"] = json_encode($matchs[$i], JSON_UNESCAPED_UNICODE);
            $post_data[$i]["diary"] = $date;
            $post_data[$i]["updated_at"] = $time;
            $post_data[$i]["created_at"] = $time;
        }

        $query_date = ApiMatchs::where("match_time",">=",strtotime($date))->where("match_time","<",strtotime($date)+86400)->first();
        /*判断数据库是否有传入date时间的赛程数据，没有，就插入date时间的赛程数据列表*/
        if($query_date == ""){
            if(ApiMatchs::insert($post_data)){
                echo "数据插入成功";
                #删除10天前的数据
                $delete_date = strtotime($date) - 15*86400;
                if(ApiMatchs::where("match_time","<",$delete_date)->first() != ""){
                    echo ApiMatchs::where("match_time","<",$delete_date)->delete();
                }
            }
        }else{
            echo "数据已经存在";
            //ApiMatchs::truncate();
        }
    }

}

