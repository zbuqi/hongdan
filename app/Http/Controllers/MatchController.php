<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isMobile;
#use App\Http\Repositories\Match as Match;
use App\Models\Match;
use App\Models\Article;
use App\Models\Navigation;
use App\Models\Seting;

class MatchController extends Controller
{
    public function show($id)
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();

        /*比赛详情*/
        $match = Match::findOrFail($id);
        $week = array('天','一','二','三','四','五','六');
        $match["week"] = '周' . $week[date('w', $match["match_time"])];
        $match["match_time"] = date('Y-m-d H:i', $match["match_time"]);
        #是否有情报、动画、阵容
        $match["coverage"] = json_decode($match["coverage"]);
        #比分
        $match["home_scores"] = json_decode($match["home_scores"]);
        $match["away_scores"] = json_decode($match["away_scores"]);
        /*比赛状态*/
        $status = Seting::where('name','match-status')->first();
        $status = json_decode($status["value"]);
        for($i=0; $i<count($status); $i++){
            if($status[$i]->id == $match["status_id"]){
                $match["status_name"] = $status[$i]->name;
            }
        }

        /*事件状态*/
        $reason_type = Seting::where('name','match-reason')->first();
        /*阵容*/
        if($match["coverage"]->lineup){
            $lineup["confirmed"] = $match["lineup_confirmed"];
            $lineup["home_formation"] = $match["home_formation"];
            $lineup["away_formation"] = $match["away_formation"];
            foreach(json_decode($match["lineup_home"]) as $item){
                if($item->x != 0 && $item->y != 0){
                    $lineup["home"]["team"][] = $item;
                }else{
                    $lineup["home"]["alterbate"][] = $item;
                }
            }
            foreach(json_decode($match["lineup_away"]) as $item){
                if($item->x != 0 && $item->y != 0){
                    $lineup["away"]["team"][] = $item;
                }else{
                    $lineup["away"]["alterbate"][] = $item;
                }
            }
            $lineup['reason_type'] = json_decode($reason_type['value']);
            $lineup = json_encode($lineup, JSON_UNESCAPED_UNICODE);
            $lineup = json_decode($lineup);
        }else{
            $lineup = "";
        }


        /*最新文章*/
        $latestArticles = Article::where('featured', '=', '0')->latest('id')->take(8)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"] . '.html';
        };

        /*链接*/
        $navs = Navigation::where('type','=','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendLinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlinks = Navigation::where('type','=','foot')->where('isOpen','=','1')->where('parentId','0')->orderBy('sequence','asc')->get();
        for($i=0;$i<count($footerlinks);$i++){
            $footerlinks[$i]['son'] = Navigation::where('type','=','foot')->where('isOpen','=','1')->where('parentId', $footerlinks[$i]['id'])->orderBy('sequence','asc')->get();
        }

        /*网站信息*/
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);

        /*网站客服*/
        $consult = Seting::where('name', 'consult')->first();
        $consult = json_decode($consult->value);

        #网站TDK
        $title = $match->home_team_name . "vs" . $match->away_team_name . "比分预测" . "_" . $match->competition_name;
        $keywords = $match->home_team_name . "vs" . $match->away_team_name . "," . $match->home_team_name . "对" . $match->away_team_name;
        $description = "";

        /*手机端还是电脑端*/
        $view = !$isMobile ? 'match' : 'mobile/match';
        return view($view, [
            'match' => $match,
            'lineup' => $lineup,
            'latestArticles'=> $latestArticles,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlinks" => $footerlinks,
            "site"             => $site,
            'consult'          => $consult,
            'title'            => $title,
            'keywords'         => $keywords,
            'description'      => $description
        ]);
    }
}
