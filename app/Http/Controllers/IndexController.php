<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class IndexController extends Controller
{
    public function show()
    {
        $latestArticles = Article::where('featured','=','0')->take(9)->get();
        $featureArticle = Article::where('featured','=','1')->take(1)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        };
        for($i=0; $i<count($featureArticle); $i++){
            $featureArticle[$i]["link"] = '/article/' . $featureArticle[$i]["id"];
        };
        return view('index', ["latestArticles" => $latestArticles, "featureArticles" => $featureArticle]);
    }
}