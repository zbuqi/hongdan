<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Match_list as Matchs;

class MatchController extends Controller
{
    public function show($id)
    {
        $data = new Matchs;
        $matchs = $data->index(2);
        $match = '';
        for($i=0; $i<count($matchs); $i++){
            for($x=0; $x<count($matchs[$i]->content); $x++){
                if($matchs[$i]->content[$x]->id == $id){
                    $match = $matchs[$i]->content[$x];
                }
            }
        }
        /*没有数据就报404*/
        if($match == ''){
            throw new \Symfony\Component\HttpKernel\Exception\HttpException(404);
        }
        $match->lineup = $data->lineup($match->id)->results;
        $lineup = $match->lineup;
        /*区分替补与主队*/
        for($i=0;$i<count($lineup->home);$i++){
            if($lineup->home[$i]->x != 0 && $lineup->home[$i]->x != 0){
                $home_team[] = $lineup->home[$i];
            }else{
                $home_alterbate[] = $lineup->home[$i];
            }
        }
        for($i=0;$i<count($lineup->away);$i++){
            if($lineup->away[$i]->x != 0 && $lineup->away[$i]->x != 0){
                $away_team[] = $lineup->away[$i];
            }else{
                $away_alterbate[] = $lineup->away[$i];
            }
        }
        $home = json_encode(array('team'=>$home_team, 'alterbate'=>$home_alterbate));
        $home = json_decode($home);
        $away = json_encode(array('team'=>$away_team, 'alterbate'=>$away_alterbate));
        $away = json_decode($away);

        return view('match', ['match' => $match, 'lineup' => $lineup, 'home' => $home, 'away'=>$away]);
    }
}