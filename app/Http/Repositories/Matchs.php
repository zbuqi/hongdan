<?php
namespace App\Http\Repositories;


use App\Models\Seting;
use App\Models\ApiMatchs;
use App\Models\Match;
use App\Http\Repositories\Matchs;
use App\Http\Repositories\MatchsApi;
use App\Http\Repositories\Lottery;


class Matchs
{
    #根据时间查询api接口的赛程赛过列表
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

    #根据时间从api接口获取的数据更新到数据库标 api_matchs
    public function update_api_matchs_show($date){
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
        }
    }

    #更新未来8天所有赛程赛果列表
    public function update_api_matchs(){
        $time = date('Ymd', time());
        for($i=0;$i<10;$i++){
            $time_1 = strtotime($time) + $i*86400;
            $time_2 = strtotime($time) + ($i+1)*86400;
            $data = ApiMatchs::where("match_time",">=", $time_1)->where("match_time","<", $time_2)->first();
            #判断某天是否有赛程，没有就更新那一天的赛程列表
            if($data == ""){
                echo Matchs::update_api_matchs(date('Ymd', $time_1));
                echo date('Ymd', $time_1) . "没有数据" . "<br>";
            }else{
                echo date('Ymd', $time_1) . "有数据" . "<br>";
            }
        }
    }

    #从体彩api接口获取足球竞彩赛程数据，关联数据表 api_matchs中现有的赛程，更新至标matchs中
    public function update_matchs(){
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
                $data["issue_num"] = $lottery[$i]->issue_num;
                $data["lottery_id"] = $lottery[$i]->id;
                $data["is_same"] = $lottery[$i]->is_same;
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
                    $data["lineup_confirmed"] = null;
                    $data["home_formation"] = null;
                    $data["away_formation"] = null;
                    $data["lineup_home"] = null;
                    $data["lineup_away"] = null;
                }
                $data["updated_at"] = date("Y-m-d H:i:s",$data["updated_at"]);
                $data["home_scores"] = json_encode($data["home_scores"], JSON_UNESCAPED_UNICODE);
                $data["away_scores"] = json_encode($data["away_scores"] , JSON_UNESCAPED_UNICODE);
                $data["coverage"] = json_encode($data["coverage"], JSON_UNESCAPED_UNICODE);
                $data["agg_score"] = json_encode($data["agg_score"], JSON_UNESCAPED_UNICODE);
                $data["round"] = json_encode($data["round"], JSON_UNESCAPED_UNICODE);
                if(in_array("environment", array_keys($data))){
                    $data["environment"] = json_encode($data["environment"], JSON_UNESCAPED_UNICODE);
                }else{
					$data["environment"] = null;
				}

                unset($data["status_name"]);
                unset($data["week"]);
                unset($data["id"]);
                $post_data[$i] = $data;
            }
        }
        foreach($post_data as $item){
            if(Match::where("match_id", $item["match_id"])->first() == ""){
                echo Match::insert($item);
                echo $item["match_id"] . " 数据添加成功" . "<br>";
            }else{
                echo $item["match_id"] . " 有数据" . "<br>";
            }
        }
    }

}

