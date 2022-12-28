<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MatchListController extends Controller
{
    public function show($name)
    {
        return view('match_list');
    }
}

