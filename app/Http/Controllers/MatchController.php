<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isMobile;
use App\Http\Repositories\Match as Match;
use App\Models\Article;
use App\Models\Navigation;
use App\Models\Seting;

class MatchController extends Controller
{
    public function show($id)
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();

        $data = new Match;
        /*比赛详情*/
        $match = $data->show($id);
        /*阵容*/
        $lineup = $data->lineup($id);

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
            'consult'          => $consult
        ]);
    }
}
