<?php

namespace App\Admin\Forms;


use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Match;
use App\Models\Seting;


class TeamForm extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        $match = Match::where('id',$input['match_id'])->first();
        if($input['team_code'] == 'lineup_home'){
            $teams = $match->lineup_home;
        }elseif($input['team_code'] == 'lineup_away'){
            $teams = $match->lineup_away;
        }
        $teams = json_decode($teams);
        for($i=0; $i<count($teams); $i++){
            if($teams[$i]->id == $input['id']){
                $teams[$i]->shirt_number = (int)$input['shirt_number'];
                $teams[$i]->logo = $input['logo'];
                $teams[$i]->name = $input['name'];
                $teams[$i]->incidents[0]->reason_type = (int)$input['reason_type'];
            }
        }

        $teams = json_encode($teams, JSON_UNESCAPED_UNICODE);
        $update = Match::where('id', $input['match_id'])->update([$input['team_code']=>$teams]);

        if($update){
            return $this->response()->success('提交成功')->refresh();
        }else{
            return $this->response()->error('Your error message.');
        }
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $reasons = Seting::where('name','match-reason')->first();
        $reasons = json_decode($reasons->value);
        $reason = [];
        foreach($reasons as $item){
            $reason[$item->id] = $item->name;
        }

        $this->text('shirt_number','球衣号');
        $this->text('logo','球员logo');
        $this->text('name','球员名字');
        $this->select('reason_type','事件')->options($reason);


        $this->hidden('match_id','赛程id');
        $this->hidden('team_code','主客队');
        $this->hidden('id','球员id');
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $url = $_SERVER['REQUEST_URI'];
        preg_match("/match\/([0-9]*)\/([\w]*)\/([0-9]*)/i",$url,$preg);
        $match_id = $preg[1];
        $team_code = $preg[2];
        $id = $preg[3];
        if($team_code == 'lineup_home'){
            $match = Match::where('id', $match_id)->first()->lineup_home;
        }elseif($team_code == 'lineup_away'){
            $match = Match::where('id', $match_id)->first()->lineup_away;
        }
        $teams = json_decode($match);
        $team = [];
        foreach($teams as $item){
            if($item->id == $id){
                $team['shirt_number'] = $item->shirt_number;
                $team['logo'] = $item->logo;
                $team['name'] = $item->name;
                $team['reason_type'] = $item->incidents[0]->reason_type;
            }
        }
        return [
            'match_id' => $match_id,
            'team_code' => $team_code,
            'id' => $id,
            'shirt_number' => $team['shirt_number'],
            'logo' => $team['logo'],
            'name' => $team['name'],
            'reason_type' => $team['reason_type']
        ];
    }
}
