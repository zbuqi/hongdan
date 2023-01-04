<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        #$category = Catefory::findOrFaill($article["categoryId"]);
        #$category["name"] = "cesg";
        $article["publishedTime"] = date("Y-m-d H:i:s", $article["publishedTime"]);
        return view('Article', ['article' => $article]);
    }
}