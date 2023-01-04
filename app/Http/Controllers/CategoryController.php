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
        $latestArticles = Article::where('categoryId', $Category['id'])->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        }
        return view('category', ["latestArticles" => $latestArticles]);
    }
}

