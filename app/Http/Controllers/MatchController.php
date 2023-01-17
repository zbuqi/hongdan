<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Match as Match;
use App\Models\Article;

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

        return view('match', ['match' => $match, 'lineup' => $lineup, 'latestArticles'=> $latestArticles]);
    }
}