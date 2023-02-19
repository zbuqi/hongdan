<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isMobile;
#use App\Http\Repositories\Match_list as Matchs;
use App\Models\Match;
use App\Models\Navigation;
use App\Models\Seting;

class MatchListController extends Controller
{
    public function show($name)
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();

        $status = Seting::where('name','match-status')->first();
        $status = json_decode($status["value"]);

        for($i=0; $i<2; $i++){
            $time = strtotime(date('Y-m-d', '1676490300'));
            $time_1 = $time+86400;
            $matchs[$i]['time'] = date('Y-m-d', $time);
            $week = array('天','一','二','三','四','五','六');
            $matchs[$i]['week'] = '周' . $week[date('w', $time)];
            $matchs[$i]['content'] = Match::where('match_time','>',$time)->where('match_time','<',$time_1)->get();
            for($x=0;$x<count($matchs[$i]['content']); $x++) {
                /*周几*/
                $matchs[$i]['content'][$x]['week'] = '周' . $week[date('w', $matchs[$i]['content'][$x]->match_time)];
                /*比赛状态*/
                for ($z = 0; $z < count($status); $z++){
                    if($status[$z]->id == $matchs[$i]['content'][$x]["status_id"]) {
                        $matchs[$i]['content'][$x]['status_name'] = $status[$z]->name;
                    }
                }
            }
            $matchs[$i] = json_encode($matchs[$i]);
            $matchs[$i] = json_decode($matchs[$i]);
        }
        sort($matchs);




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

        /*手机端还是电脑端*/
        $view = !$isMobile ? 'match_list' : 'mobile/match_list';

        return view($view, [
            'matchs' => $matchs,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlinks" => $footerlinks,
            "site"             => $site,
            'consult'          => $consult
        ]);
    }
}

