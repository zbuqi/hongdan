<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Navigation;
use App\Models\Seting;


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
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"] . '.html';
        }
        for($i=0; $i<count($featureArticles); $i++){
            $featureArticles[$i]["link"] = '/article/' . $featureArticles[$i]["id"] . '.html';
        }
        /*链接*/
        $navs = Navigation::where('type','=','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendLinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlink1s = Navigation::where('type','=','footerlink1')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlink2s = Navigation::where('type','=','footerlink2')->where('isOpen','=','1')->orderBy('sequence','asc')->get();

        return view('category', [
            "latestArticles" => $latestArticles,
            'featureArticles'=>$featureArticles,
            'category'=>$Category,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlink1s" => $footerlink1s,
            "footerlink2s" => $footerlink2s
        ]);
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
            $latestArticles[$i]["thumb"] = '/uploads/' . $latestArticles[$i]["thumb"];
        }
        for($i=0; $i<count($featureArticles); $i++){
            $featureArticles[$i]["link"] = '/article/' . $featureArticles[$i]["id"];
            $featureArticles[$i]["thumb"] = '/uploads/' . $featureArticles[$i]["thumb"];
        }
        /*链接*/
        $navs = Navigation::where('type','=','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendLinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
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

        return view('category', [
            "latestArticles" => $latestArticles,
            'featureArticles'=>$featureArticles,
            'category'=>$Category,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlinks" => $footerlinks,
            "site"             => $site,
            'consult'          => $consult
        ]);
    }
}

