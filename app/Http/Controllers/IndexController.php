<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Adv;
use App\Http\Middleware\isMobile;

class IndexController extends Controller
{
    public function show()
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();
        $latestArticles = Article::where('featured','=','0')->latest('id')->take(9)->get();
        $featureArticle = Article::where('featured','=','1')->take(1)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        };
        for($i=0; $i<count($featureArticle); $i++){
            $featureArticle[$i]["link"] = '/article/' . $featureArticle[$i]["id"];
        };
        /*广告*/
        $advs = Adv::get();
        for($i=0; $i<count($advs); $i++){
            $adv[$advs[$i]['alias']] = $advs[$i]['body'];
        }

        /*手机端还是电脑端*/
        $view = !$isMobile ? 'index' : 'mobile/index';
        return view($view, ["latestArticles"=>$latestArticles, "featureArticles"=>$featureArticle, "adv"=>$adv]);
    }
}