<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Adv;
use App\Models\Match;
use App\Models\Navigation;
use App\Models\Seting;
use App\Http\Middleware\isMobile;

class IndexController extends Controller
{
    public function show()
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();
        #最新
        $latestArticles = Article::where('featured','=','0')->latest('id')->take(9)->get();
        #特色
        $featureArticle = Article::where('featured','=','1')->take(1)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"] . '.html';
        };
        for($i=0; $i<count($featureArticle); $i++){
            $featureArticle[$i]["link"] = '/article/' . $featureArticle[$i]["id"] . '.html';
        };
        #首页banner
        $banner_key = !$isMobile ? 'pc-banner' : 'm-banner';
        $banner = Seting::where('name',$banner_key)->first();
        $banner = json_decode($banner->value);
        $banners = [];
        for($i=0; $i<count($banner); $i++){
            if($banner[$i]->isOpen == 1){
                $banners[] = $banner[$i];
            }
        }
        #每天赛程
        #比赛状态
        $status = Seting::where('name','match-status')->first();
        $status = json_decode($status["value"]);
        #获取最新比赛的时间
        $time = Match::latest("match_time")->first()->match_time;
        $time = strtotime(date('Y-m-d', $time));
        $time = $time - 2*86400;
        $matchs = [];
        for($i=0; $i<3; $i++){
            $time = Match::latest("match_time")->first()->match_time;
            $time = strtotime(date('Y-m-d', $time));
            $time = $time - 2*86400 + $i*86400;
            $time_1 = $time + ($i+1)*86400;
            $match_data = Match::where('match_time','>',$time)->where('match_time','<',$time_1)->first();
            if($match_data != ""){
                $matchs[$i] = $match_data;
                $matchs[$i]['time'] = $time;
                $week = array('天','一','二','三','四','五','六');
                $matchs[$i]['week'] = '周' . $week[date('w', $time)];
                $matchs[$i]["coverage"] = json_decode($matchs[$i]["coverage"]);
                #比赛状态
                for ($z = 0; $z < count($status); $z++){
                    if($status[$z]->id == $matchs[$i]["status_id"]) {
                        $matchs[$i]['status_name'] = $status[$z]->name;
                    }
                }
                $matchs[$i] = json_encode($matchs[$i]);
                $matchs[$i] = json_decode($matchs[$i]);
            }
        }
        sort($matchs);
        

        #广告
        $advs = Adv::get();
        for($i=0; $i<count($advs); $i++){
            $adv[$advs[$i]['alias']] = $advs[$i]['body'];
        }
        #导航链接
        $navs = Navigation::where('type','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $mobilenavs = Navigation::where('type','m-foot')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendlinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlinks = Navigation::where('type','=','foot')->where('isOpen','=','1')->where('parentId','0')->orderBy('sequence','asc')->get();
        for($i=0;$i<count($footerlinks);$i++){
            $footerlinks[$i]['son'] = Navigation::where('type','=','foot')->where('isOpen','=','1')->where('parentId', $footerlinks[$i]['id'])->orderBy('sequence','asc')->get();
        }
        #网站信息
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);

        #网站客服
        $consult = Seting::where('name', 'consult')->first();
        $consult = json_decode($consult->value);

        #手机端还是电脑端
        $view = !$isMobile ? 'index' : 'mobile/index';

        return view($view, [
            "latestArticles"   => $latestArticles,
            "featureArticles"  => $featureArticle,
            "adv"              => $adv,
            "navs"             => $navs,
            "mobilenavs"       => $mobilenavs,
            "firendlinks"      => $firendlinks,
            "footerlinks"      => $footerlinks,
            "site"             => $site,
            'consult'          => $consult,
            'banners'          => $banners,
            'matchs'           => $matchs
        ]);
    }
}
