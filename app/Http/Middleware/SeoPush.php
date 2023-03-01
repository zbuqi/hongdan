<?php

namespace App\Http\Middleware;

use App\Models\Seting;
use App\Models\Article;
use App\Models\Match;

class SeoPush
{
    public function Baidu($link){
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);

        $urls = array($link);
        $api = $site->baidu_ts_api;
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);

        return $result;
    }
    public function baidu_ts_articles(){
        $datas =  Article::where('baidu_ts','0')->get();
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);
        foreach($datas as $item){
            $link = $site->host . "/article/" . $item->id . ".html";
            $data = SeoPush::Baidu($link);
            $data = json_decode($data);
            #判断是否推送成功
            if(!property_exists($data, 'error')){
                Article::where('id', $item->id)->update(['baidu_ts' => '1']);
                echo $data = $link . '提交成功，推送成功' . $data->success . '条，今日还可推送' . $data->remain . "<br>";
            } 
        }
    }
    public function baidu_ts_matchs(){
        $datas =  Match::where('baidu_ts','0')->get();
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);
        foreach($datas as $item){
            $link = $site->host . "/match/" . $item->id . ".html";
            $data = SeoPush::Baidu($link);
            $data = json_decode($data);
            #判断是否推送成功
            if(!property_exists($data, 'error')){
                Match::where('id', $item->id)->update(['baidu_ts' => '1']);
                echo $data = $link . '提交成功，推送成功' . $data->success . '条，今日还可推送' . $data->remain . "<br>";
            } 
        }
    }

}
