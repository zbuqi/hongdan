<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Adv;
use App\Models\Navigation;
use App\Models\Seting;
use App\Http\Middleware\isMobile;

use \Illuminate\Support\Str;


class ArticleController extends Controller
{
    public function show($id)
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();

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
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"] . '.html';
        };
        for($i=0; $i<count($featureArticles); $i++){
            $featureArticles[$i]["link"] = '/article/' . $featureArticles[$i]["id"] . '.html';
        };
        for($i=0; $i<count($correlationsArticles); $i++){
            $correlationsArticles[$i]["link"] = '/article/' . $correlationsArticles[$i]["id"] . '.html';
        };
        /*上一篇，下一篇*/
        $last = Article::where('id', '<', $article->id)->latest('id')->first();
        $next = Article::where('id', '>', $article->id)->oldest('id')->first();
        if($last != ''){
            $article->last = '/article/' . $last->id . ".html";
        }
        if($next != ''){
            $article->next = '/article/' . $next->id . ".html";
        }
        /*链接*/
        $navs = Navigation::where('type','=','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendLinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlinks = Navigation::where('type','=','foot')->where('isOpen','=','1')->where('parentId','0')->orderBy('sequence','asc')->get();
        for($i=0;$i<count($footerlinks);$i++){
            $footerlinks[$i]['son'] = Navigation::where('type','=','foot')->where('isOpen','=','1')->where('parentId', $footerlinks[$i]['id'])->orderBy('sequence','asc')->get();
        }
        /*广告*/
        $advs = Adv::get();
        for($i=0; $i<count($advs); $i++){
            $adv[$advs[$i]['alias']] = $advs[$i]['body'];
        }
        $adv = json_decode(json_encode($adv));

        /*网站信息*/
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);

        /*网站客服*/
        $consult = Seting::where('name', 'consult')->first();
        $consult = json_decode($consult->value);

        /*手机端还是电脑端*/
        $view = !$isMobile ? 'article' : 'mobile/article';
        return view($view, [
            'article' => $article,
            'category' => $category,
            'featureArticles' => $featureArticles,
            'latestArticles'=>$latestArticles,
            'correlationsArticles'=>$correlationsArticles,
            'adv'=>$adv,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlinks" => $footerlinks,
            "site"             => $site,
            'consult'          => $consult
        ]);
    }


}
