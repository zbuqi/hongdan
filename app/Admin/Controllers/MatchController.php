<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Match;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Models\Seting;
use App\Models\Comment;

class MatchController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Match(), function (Grid $grid) {
            $grid->number('序号');
            #$grid->column('match_id');
            $grid->column('issue');
            $grid->column('competition_name');
            $grid->column('home_team_name');
            $grid->column('away_team_name');
            $grid->column('status_id')->display(function($status_id){
                $status = Seting::where('name','match-status')->first();
                $status = json_decode($status->value);
                for($i=0; $i<count($status);$i++){
                    if($status[$i]->id == $status_id){
                        $content = $status[$i]->name;
                    }
                }
                return $content;
            });
            #$grid->column('season_id');
            $grid->column('competition_name');
            $grid->column('match_time')->display(function ($match_time){
                return date('Y-m-d  H:i', $match_time);
            });
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Match(), function (Show $show) {
            $show->field('id');
            $show->field('match_id');
            $show->field('season_id');
            $show->field('competition_id');
            $show->field('competition_name');
            $show->field('competition_logo');
            $show->field('home_team_id');
            $show->field('home_team_name');
            $show->field('home_team_logo');
            $show->field('away_team_id');
            $show->field('away_team_name');
            $show->field('away_team_logo');
            $show->field('status_id');
            $show->field('match_time');
            $show->field('neutral');
            $show->field('note');
            $show->field('home_scores');
            $show->field('away_scores');
            $show->field('home_position');
            $show->field('away_position');
            $show->field('coverage');
            $show->field('venue_id');
            $show->field('referee_id');
            $show->field('related_id');
            $show->field('agg_score');
            $show->field('round');
            $show->field('environment');
            $show->field('sport_id');
            $show->field('lottery_type');
            $show->field('issue');
            $show->field('issue_num');
            $show->field('lottery_id');
            $show->field('is_same');
            $show->field('lineup_confirmed');
            $show->field('home_formation');
            $show->field('away_formation');
            $show->field('lineup_home');
            $show->field('lineup_away');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Match(), function (Form $form) {

            $form->text('competition_name');
            $form->text('competition_logo');
            $form->text('home_team_name');
            $form->text('home_team_logo');
            $form->text('away_team_id');
            $form->text('away_team_name');
            $form->text('away_team_logo');
            $form->text('match_time');
            $form->text('neutral');
            $form->text('note');
            $form->text('home_scores');
            $form->text('away_scores');
            $form->text('home_position');
            $form->text('away_position');
            $form->text('coverage');
            $form->text('venue_id');
            $form->text('referee_id');
            $form->text('related_id');
            $form->text('agg_score');
            $form->text('round');
            $form->text('environment');
            $form->text('sport_id');
            $form->text('lottery_type');
            $form->text('issue');
            $form->text('issue_num');
            $form->text('lottery_id');
            $form->text('is_same');
            $form->text('lineup_confirmed');
            $form->text('home_formation');
            $form->text('away_formation');
            $form->text('lineup_home');
            $form->text('lineup_away');
            $form->text('created_at');
            $form->text('updated_at');

            $form->hidden('id');
            $form->hidden('match_id');
            $form->hidden('season_id');
            $form->hidden('competition_id');
            $form->hidden('home_team_id');
            $form->hidden('away_team_id');
            $form->hidden('status_id');


            /*
            $form->block(12, function(Form\BlockForm $form){
                $form->title('赛程详情');
                $form->column(4, function(Form\BlockForm $form){
                    $form->text('issue');
                    $form->text('season_id');
                    $form->text('competition_name');
                    $form->text('match_id');
                });
                $form->column(4, function(Form\BlockForm $form){
                    $form->text('status_id');
                    $form->text('match_time');
                    $form->text('venue_id');
                    $form->text('referee_id');
                });
                $form->column(4, function(Form\BlockForm $form){
                    $form->image('competition_logo');
                });
            }); 
            $form->block(12, function(Form\BlockForm $form){
                #显示底部提交按钮
                $form->showFooter();
                $form->title('比赛团队');
                $form->column(6, function(Form\BlockForm $form){
                    $form->text('home_team_name');
                    $form->image('home_team_logo');
                    $form->text('home_position');
                    $form->text('home_formation');
                    $form->text('home_baoliao','赢球爆料');
                    $form->text('home_tz','球队特征');
                    $form->hidden('lineup_home');
                });
                $form->column(6, function(Form\BlockForm $form){
                    $form->text('away_team_name');
                    $form->image('away_team_logo');
                    $form->text('away_position');
                    $form->text('away_formation');
                    $form->text('away_baoliao','赢球爆料');
                    $form->text('away_tz','球队特征');
                    $form->hidden('lineup_away');
                });
            });  

            $form->block(12, function(Form\BlockForm $form){
                $form->title('精彩点评');
                
            });

            #不需要修改的数据
            $form->hidden('id');
            $form->hidden('match_id');
            $form->hidden('competition_id');
            $form->hidden('away_team_id');
            $form->hidden('home_team_id');
            $form->hidden('neutral');
            $form->hidden('note');
            $form->hidden('home_scores');
            $form->hidden('away_scores');
            $form->hidden('coverage');
            $form->hidden('agg_score');
            $form->hidden('round');
            $form->hidden('environment');
            $form->hidden('lottery_id');
            $form->hidden('issue_num');
            $form->hidden('related_id');
            $form->hidden('sport_id');
            $form->hidden('lottery_type');
            $form->hidden('is_same');
            $form->hidden('lineup_confirmed');
            

            $form->hidden('created_at');
            $form->hidden('updated_at');

            #忽略掉不需要保存的字段
            $form->ignore(['home_tz','away_tz','home_baoliao','away_baoliao']);
            */
        });
    }
}
