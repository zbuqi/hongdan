<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use \Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $category = Category::findOrFail($article["categoryId"]);
        $category['link'] = '/category/' . $category['code'];
        /*最新推荐*/
        $latestArticles = Article::latest('id')->take(5)->get();
        /*特别推荐*/
        $featureArticles = Article::where('featured','=','1')->take(5)->get();
        /*相关推荐*/
        $correlationsArticles = Article::where('categoryId','=',$article["categoryId"])->take(4)->get();

        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        };
        for($i=0; $i<count($featureArticles); $i++){
            $featureArticles[$i]["link"] = '/article/' . $featureArticles[$i]["id"];
        };
        /*上一篇，下一篇*/
        $last = Article::where('id', '<', $article->id)->latest('id')->first();
        $next = Article::where('id', '>', $article->id)->oldest('id')->first();
        if($last != ''){
            $article->last = '/article/' . $last->id;
        }
        if($next != ''){
            $article->next = '/article/' . $next->id;
        }



        return view('article', ['article' => $article, 'category' => $category, 'featureArticles' => $featureArticles, 'latestArticles'=>$latestArticles, 'correlationsArticles'=>$correlationsArticles]);
    }


}