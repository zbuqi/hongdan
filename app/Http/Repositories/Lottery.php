<?php

namespace App\Http\Repositories;

use App\Http\Repositories\MatchsApi;

class Lottery
{
    public function index($lottery_type,$sport_id){
        $lotterys = MatchsApi::lotterys();
        //获取当前时间
        $time = date('ymd', time());
        /*判断是否出错，出错就返回出错信息*/
        if(property_exists($lotterys, 'err')){
           return  $lotterys->err;
        }
        /*判断是否有数据*/
        if(property_exists($lotterys, 'data')){
            $data = $lotterys->data;
            $content = [];
            for($i=0; $i<count($data); $i++){
                if($data[$i]->lottery_type == $lottery_type && $data[$i]->sport_id == $sport_id && $data[$i]->issue >= $time){
                    $content[] = $data[$i];
                }
            }
            return $content;
        }

    }
}
