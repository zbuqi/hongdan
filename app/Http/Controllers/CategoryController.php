<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isMobile;
use App\Models\Article;
use App\Models\Category;
use App\Models\Navigation;
use App\Models\Seting;


class CategoryController extends Controller
{

    public function show($code)
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();
        $data = $this->list($code);
        $data['title'] = $data['category']->name;
        if($data['category']->seo_keyword == ""){
            $data['keywords'] = $data['category']->name;
        }else{
            $data['keywords'] = $data['category']->seo_keyword;
        }
        if($data['category']->seo_description == ""){
            $data['description'] = $data['category']->name;
        }else{
            $data['description'] = $data['category']->seo_description;
        }
        #手机端还是电脑端
        $view = !$isMobile ? 'category' : 'mobile/category';
        return view($view, $data);
    }
    public function index()
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();
        $data = $this->list();
        $data['title'] = "资讯";
        $data['keywords'] = "资讯";
        $data['description'] = '';
        #手机端还是电脑端
        $view = !$isMobile ? 'category' : 'mobile/category';
        return view($view, $data);
    }

    public function list($code='')
    {
        if($code){
            $Category = Category::where('code', $code)->firstOrFail();
            $latestArticles = Article::where('categoryId', $Category['id'])->latest('id')->paginate(10);
        }else{
            $Category = false;
            $latestArticles = Article::latest('id')->paginate(10);
        }
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

        #分页
        $current = $latestArticles->currentPage();
        $last = $latestArticles->lastPage();
        $page["current"] = $current;
        $page["last"] = $last;
        $page["prev"] = $latestArticles->previousPageUrl();
        $page["next"] = $latestArticles->nextPageUrl();
        $page["content"] = [];
        if($last<6){
            for($i=1; $i<$last; $i++){
                $page["content"][] = $i;
            }
        }elseif($current<=3){
            for($i=1; $i<6; $i++){
                $page["content"][] = $i;
            }
        }elseif(($last-$current)<2){
            for($i=($last-4);$i<=$last;$i++){
                $page["content"][] = $i;
            }
        }else{
            for($i=$current-2;$i<$current+3;$i++){
                $page["content"][] = $i;
            }
        }
        $page = json_decode(json_encode($page));

        $content = [
            "latestArticles" => $latestArticles,
            'featureArticles'=>$featureArticles,
            'category'=>$Category,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlinks" => $footerlinks,
            "site"             => $site,
            'consult'          => $consult,
            'page'             => $page
        ];
        return $content;
    }
}

