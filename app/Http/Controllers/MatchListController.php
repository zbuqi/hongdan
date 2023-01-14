<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Match_list as Matchs;

class MatchListController extends Controller
{
    public function show($name)
    {   
        $matchs = new Matchs;
        $matchs = $matchs->index(2);//两天
        return view('match_list', ['matchs' => $matchs]);
    }
}

