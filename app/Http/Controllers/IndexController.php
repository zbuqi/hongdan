<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
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
            $latestArticles[$i]["thumb"] = '/uploads/' . $latestArticles[$i]["thumb"];
        };
        for($i=0; $i<count($featureArticle); $i++){
            $featureArticle[$i]["link"] = '/article/' . $featureArticle[$i]["id"];
            $featureArticles[$i]["thumb"] = '/uploads/' . $featureArticles[$i]["thumb"];
        };
        if(!$isMobile){
            return view('index', ["latestArticles" => $latestArticles, "featureArticles" => $featureArticle]);
        }else{
            return view('mobile/index');
        }
        
    }
}