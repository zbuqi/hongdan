<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Adv;
use App\Models\Navigation;
use App\Models\Seting;
use App\Http\Middleware\isMobile;

class IndexController extends Controller
{
    public function show()
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();
        /*最新*/
        $latestArticles = Article::where('featured','=','0')->latest('id')->take(9)->get();
        /*特色*/
        $featureArticle = Article::where('featured','=','1')->take(1)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"] . '.html';
        };
        for($i=0; $i<count($featureArticle); $i++){
            $featureArticle[$i]["link"] = '/article/' . $featureArticle[$i]["id"] . '.html';
        };
        /*广告*/
        $advs = Adv::get();
        for($i=0; $i<count($advs); $i++){
            $adv[$advs[$i]['alias']] = $advs[$i]['body'];
        }
        /*导航链接*/
        $navs = Navigation::where('type','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendlinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
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
        $view = !$isMobile ? 'index' : 'mobile/index';
        return view($view, [
            "latestArticles"   => $latestArticles,
            "featureArticles"  => $featureArticle,
            "adv"              => $adv,
            "navs"             => $navs,
            "firendlinks"      => $firendlinks,
            "footerlinks"      => $footerlinks,
            "site"             => $site,
            'consult'          => $consult
        ]);
    }
}
