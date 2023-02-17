<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isMobile;
use App\Http\Repositories\Match as Match;
use App\Models\Article;
use App\Models\Navigation;
use App\Models\Seting;

class MatchController extends Controller
{
    public function show($id)
    {
        $isMobile = new isMobile;
        $isMobile = $isMobile->isMobile();

        $data = new Match;
        /*比赛详情*/
        $match = $data->show($id);
        /*阵容*/
        $lineup = $data->lineup($id);
        
        echo 'id：' . json_encode($match->id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'season_id：' . json_encode($match->season_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'competition_id：' . json_encode($match->competition_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'competition_name：' . json_encode($match->competition_name, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'competition_logo：' . json_encode($match->competition_logo, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'home_team_id：' . json_encode($match->home_team_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'home_team_name：' . json_encode($match->home_team_name, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'away_team_id：' . json_encode($match->away_team_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'away_team_name：' . json_encode($match->away_team_name, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'away_team_logo：' . json_encode($match->away_team_logo, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'status_id:' . json_encode($match->status_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'match_time：' . json_encode($match->match_time, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'neutral：' . json_encode($match->neutral, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'note：' . json_encode($match->note, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'home_scores：' . json_encode($match->home_scores, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'away_scores：' . json_encode($match->away_scores, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'home_position：' . json_encode($match->home_position, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'away_position：' . json_encode($match->away_position, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'coverage：' . json_encode($match->coverage, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'venue_id：' . json_encode($match->venue_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'referee_id：' . json_encode($match->referee_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'related_id：' . json_encode($match->related_id, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'agg_score：' . json_encode($match->agg_score, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'round：' . json_encode($match->round, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'environment：' . json_encode($match->environment, JSON_UNESCAPED_UNICODE) . '<br>';
        echo 'updated_at：' . json_encode($match->updated_at, JSON_UNESCAPED_UNICODE) . '<br><br><br><br><br>';

        echo 'confirmed：' . json_encode($lineup->confirmed, JSON_UNESCAPED_UNICODE) . '<br><br>';
        echo 'home_formation：' . json_encode($lineup->home_formation, JSON_UNESCAPED_UNICODE) . '<br><br>';
        echo 'away_formation：' . json_encode($lineup->away_formation, JSON_UNESCAPED_UNICODE) . '<br><br>';
        echo 'home：' . json_encode($lineup->home, JSON_UNESCAPED_UNICODE) . '<br><br>';
        echo 'away：' . json_encode($lineup->away, JSON_UNESCAPED_UNICODE) . '<br><br>';

        /*最新文章*/
        $latestArticles = Article::where('featured', '=', '0')->latest('id')->take(8)->get();
        for($i=0; $i<count($latestArticles); $i++){
            $latestArticles[$i]["link"] = '/article/' . $latestArticles[$i]["id"] . '.html';
        };

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

        /*手机端还是电脑端*/
        $view = !$isMobile ? 'match' : 'mobile/match';

        return view($view, [
            'match' => $match,
            'lineup' => $lineup,
            'latestArticles'=> $latestArticles,
            "navs" => $navs,
            "firendLinks" => $firendLinks,
            "footerlinks" => $footerlinks,
            "site"             => $site,
            'consult'          => $consult
        ]);
    }
}
