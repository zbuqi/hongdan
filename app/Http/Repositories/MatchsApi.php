<?php
namespace App\Http\Repositories;

use GuzzleHttp\Client;

class MatchsApi
{
    /*赛程列表*/
    public function matchs($date){
        $client = new Client();
        $request = $client->request('GET','https://open.sportnanoapi.com/api/v5/football/match/schedule/diary', [
            'query' => [
                'user' => 'cqyxs',
                'secret' => 'afd2975f506709986cb45c0b934c3966',
                'date' => $date
            ]
        ]);
        $content = json_decode($request->getBody()->getContents());
        return $content;
    }
    /*比赛阵容*/
    public function lineup($id){
        $client = new Client();
        $request = $client->request('GET','https://open.sportnanoapi.com/api/v5/football/match/lineup/detail', [
            'query' => [
                'user' => 'cqyxs',
                'secret' => 'afd2975f506709986cb45c0b934c3966',
                'id' => $id
            ]
        ]);
        $content = json_decode($request->getBody()->getContents());
        return $content;
    }
    /*体彩比赛关联列表*/
    public function lotterys(){
        $client = new Client();
        $request = $client->request('GET','https://open.sportnanoapi.com/api/v2/sports/lottery/match/list', [
            'query' => [
                'user' => 'cqyxs',
                'secret' => 'afd2975f506709986cb45c0b934c3966'
            ]
        ]);
        $content = json_decode($request->getBody()->getContents());
        return $content;
    }
}

