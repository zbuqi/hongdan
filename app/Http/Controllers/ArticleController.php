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
        $article["publishedTime"] = date("Y-m-d H:i:s", $article["publishedTime"]);

        $category = Category::findOrFail($article["categoryId"]);
        $category['link'] = '/category/' . $category['code'];
        return view('Article', ['article' => $article, 'category' => $category]);
    }
}