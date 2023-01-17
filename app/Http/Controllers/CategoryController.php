<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($code)
    {
        $Category = Category::where('code', $code)->firstOrFail();
        /*最新*/
        $latestArticles = Article::where('categoryId', $Category['id'])->latest('id')->get();
        /*特别推荐*/
        $featureArticles = Article::where('featured','=','1')->take(5)->get();

        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        }
        for($i=0; $i<count($featureArticles); $i++){
            $featureArticles[$i]["link"] = '/article/' . $featureArticles[$i]["id"];
        }
        return view('category', ["latestArticles" => $latestArticles, 'featureArticles'=>$featureArticles, 'category'=>$Category]);
    }
    public function index()
    {
        $Category = false;
        /*最新*/
        $latestArticles = Article::latest('id')->get();
        /*特别推荐*/
        $featureArticles = Article::where('featured','=','1')->take(5)->get();

        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        }
        for($i=0; $i<count($featureArticles); $i++){
            $featureArticles[$i]["link"] = '/article/' . $featureArticles[$i]["id"];
        }
        return view('category', ["latestArticles" => $latestArticles, 'featureArticles'=>$featureArticles, 'category'=>$Category]);
    }
}

