<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Match as Match;
use App\Models\Article;
use App\Models\Navigation;

class MatchController extends Controller
{
    public function show($id)
    {
        $data = new Match;
        /*比赛详情*/
        $match = $data->show($id);
        /*阵容*/
        $lineup = $data->lineup($id);
        /*最新文章*/
        $latestArticles = Article::where('featured','=','0')->latest('id')->take(8)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"];
        };

        /*链接*/
        $navs = Navigation::where('type','=','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendLinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlink1s = Navigation::where('type','=','footerlink1')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlink2s = Navigation::where('type','=','footerlink2')->where('isOpen','=','1')->orderBy('sequence','asc')->get();

        return view('match', [
            'match' => $match, 
            'lineup' => $lineup, 
            'latestArticles'=> $latestArticles,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlink1s" => $footerlink1s,
            "footerlink2s" => $footerlink2s
        ]);
    }
}