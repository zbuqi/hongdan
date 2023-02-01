<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Match_list as Matchs;
use App\Models\Navigation;

class MatchListController extends Controller
{
    public function show($name)
    {   
        $matchs = new Matchs;
        $matchs = $matchs->index(2);//两天

        /*链接*/
        $navs = Navigation::where('type','=','top')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $firendLinks = Navigation::where('type','=','firendLink')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlink1s = Navigation::where('type','=','footerlink1')->where('isOpen','=','1')->orderBy('sequence','asc')->get();
        $footerlink2s = Navigation::where('type','=','footerlink2')->where('isOpen','=','1')->orderBy('sequence','asc')->get();

        return view('match_list', [
            'matchs' => $matchs,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlink1s" => $footerlink1s,
            "footerlink2s" => $footerlink2s
        ]);
    }
}

