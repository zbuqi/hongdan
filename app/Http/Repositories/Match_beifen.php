<?php

namespace App\Http\Repositories;

use GuzzleHttp\Client;
use App\Http\Repositories\Match_list as Matchs;

class Match
{
    public function show($id)
    {
        $data = new Matchs;
        $matchs = $data->index(2);
        $match = '';
        for($i=0; $i<count($matchs); $i++){
            for($x=0; $x<count($matchs[$i]->content); $x++){
                if(property_exists($matchs[$i]->content[0], 'err')){
                    exit($matchs[$i]->content[0]->err);
                };
                if($matchs[$i]->content[$x]->id == $id){
                    $match = $matchs[$i]->content[$x];
                }
            }
        }
        /*没有数据就报404*/
        if($match == ''){
            throw new \Symfony\Component\HttpKernel\Exception\HttpException(404);
        }
        $match->lineup = $data->lineup($id)->results;


        return $match;
    }

    public function lineup($id){
        /*阵容*/
        $lineup = $this->show($id)->lineup;

        /*事件状态码*/
        $reason_type = array(
            ['id'=>'1', 'name'=>'进球', 'img'=>'jq-icon.png'],
            ['id'=>'8', 'name'=>'点球', 'img'=>'dq-icon.png'],
            ['id'=>'16', 'name'=>'射失点球', 'img'=>'ssdq-icon.png'],
            ['id'=>'9', 'name'=>'换人', 'img'=>'hr-icon.png'],
            ['id'=>'4', 'name'=>'红牌', 'img'=>'redp-icon.png'],
            ['id'=>'3', 'name'=>'黄牌', 'img'=>'hp-icon.png'],
            ['id'=>'15', 'name'=>'两黄变红', 'img'=>'lh-icon.png'],
        );
        $reason_type = json_encode($reason_type);
        $reason_type = json_decode($reason_type);
        $lineup->reason_type = $reason_type;

        /*区分替补与主队*/
        for($i=0;$i<count($lineup->home);$i++){
            /*是否有事件*/
            if(property_exists($lineup->home[$i], 'incidents')){
                for($x=0; $x<count($lineup->home[$i]->incidents); $x++){
                    $incidents = $lineup->home[$i]->incidents[$x];
                    /*是否有事件状态码*/
                    if(property_exists($incidents, 'reason_type')){
                        $reason_type = $lineup->home[$i]->incidents[$x]->reason_type;
                        foreach($lineup->reason_type as $reason){
                            if($reason->id == $lineup->home[$i]->incidents[$x]->reason_type){
                                $lineup->home[$i]->incidents[$x]->reason_name = $reason->name;
                                $lineup->home[$i]->incidents[$x]->reason_img = $reason->img;
                            }
                        }
                    }
                }
            }
            /**/
            if($lineup->home[$i]->x != 0 && $lineup->home[$i]->x != 0){
                $home_team[] = $lineup->home[$i];
            }else{
                $home_alterbate[] = $lineup->home[$i];
            }
        }
        for($i=0;$i<count($lineup->away);$i++){
            /*是否有事件*/
            if(property_exists($lineup->away[$i], 'incidents')){
                for($x=0; $x<count($lineup->away[$i]->incidents); $x++){
                    $incidents = $lineup->away[$i]->incidents[$x];
                    /*是否有事件状态码*/
                    if(property_exists($incidents, 'reason_type')){
                        $reason_type = $lineup->away[$i]->incidents[$x]->reason_type;
                        foreach($lineup->reason_type as $reason){
                            if($reason->id == $lineup->away[$i]->incidents[$x]->reason_type){
                                $lineup->away[$i]->incidents[$x]->reason_name = $reason->name;
                                $lineup->away[$i]->incidents[$x]->reason_img = $reason->img;
                            }
                        }
                    }
                }
            }
            /**/
            if($lineup->away[$i]->x != 0 && $lineup->away[$i]->x != 0){
                $away_team[] = $lineup->away[$i];
            }else{
                $away_alterbate[] = $lineup->away[$i];
            }
        }
        $home = json_encode(array('team'=>$home_team, 'alterbate'=>$home_alterbate));
        $home = json_decode($home);
        $away = json_encode(array('team'=>$away_team, 'alterbate'=>$away_alterbate));
        $away = json_decode($away);
        $lineup->home = $home;
        $lineup->away = $away;

        return $lineup;

    }
}
