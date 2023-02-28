<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\SiteForm;
use App\Admin\Repositories\Match;
use App\Models\AdminUser as User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Models\Seting;
use App\Models\Comment;
use App\Models\Match as match_mode;

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
            #获取当前id
            $id = $form->builder()->getResourceId();
            $match = match_mode::where('id',$id)->first();
            $comment = Comment::where('typeId',$match->match_id)->get();

            $form->tab('赛程详情',function($form) use ($match, $comment){
                $form->fieldset('赛程详情', function(Form $form) use ($match){
                    #自定义的数据
                    if(!$form->isCreating()){
                        $zdy_match_time = date('Y-m-d H:i:s',$match->match_time);
                        $zdy_coverage = ['mlive'=>'是否有动画','intelligence'=>'是否有情报','lineup'=>'是否有阵容'];
                        $coverage_default[] = empty($match->coverage->mlive) ? 'mlive' : '';
                        $coverage_default[] = empty($match->coverage->intelligence) ? 'intelligence' : '';
                        $coverage_default[] = empty($match->coverage->lineup) ? 'lineup' : '';
                    }
                    $form->text('issue');
                    $form->text('competition_name');
                    $form->text('competition_logo');
                    if(!$form->isCreating()){
                        $form->text('zdy_match_time','比赛时间')->value($zdy_match_time);
                        $form->checkbox('zdy_coverage','动画、情报、阵容')->options($zdy_coverage)->default($coverage_default, true);
                    }
                    $form->hidden('id');
                    $form->hidden('match_time');
                    $form->hidden('neutral');
                    $form->hidden('coverage');
                    $form->hidden('agg_score');
                    $form->hidden('round');
                    $form->hidden('environment');
                    $form->hidden('lottery_type');
                    $form->hidden('issue_num');
                    $form->hidden('is_same');
                    $form->hidden('lineup_confirmed');
                    $form->hidden('note');
                });
                $form->fieldset('主队信息', function(Form $form) use ($match){
                    if(!$form->isCreating()){
                        $zdy_home_scores = json_decode($match->home_scores)[0];
                    }

                    $form->text('home_team_name');
                    $form->text('home_team_logo');
                    if(!$form->isCreating()) {
                        $form->text('zdy_home_scores','主队比分')->value($zdy_home_scores);
                    }
                    $form->hidden('home_scores');
                    $form->text('home_position');
                    $form->text('home_formation');
                    $form->text('lineup_home');
                });
                $form->fieldset('客队信息', function(Form $form) use ($match){
                    $form->title('客队信息');
                    if(!$form->isCreating()){
                        $zdy_away_scores = json_decode($match->away_scores)[0];
                    }
                    $form->text('away_team_name');
                    $form->text('away_team_logo');
                    if(!$form->isCreating()) {
                        $form->text('zdy_away_scores','客队比分')->value($zdy_away_scores);
                    }
                    $form->hidden('away_scores');
                    $form->text('away_position');
                    $form->text('away_formation');
                    $form->hidden('lineup_away');
                });
                $form->fieldset('精彩点评', function(Form $form) use ($match, $comment){
                    $form->html(

                    )->width(12);
                });
            });
            $form->tab('主队阵容',function($form) use ($match){
                $form->html(

                );
            });
            $form->tab('客队阵容',function($form) use ($match){

            });


            #不需要修改的数据
            $form->hidden('id');
            $form->hidden('match_id');
            $form->hidden('season_id');
            $form->hidden('competition_id');
            $form->hidden('home_team_id');
            $form->hidden('away_team_id');
            $form->hidden('status_id');
            $form->hidden('venue_id');
            $form->hidden('referee_id');
            $form->hidden('related_id');
            $form->hidden('sport_id');
            $form->hidden('lottery_id');

            $form->hidden('created_at');
            $form->hidden('updated_at');

            #忽略掉不需要保存的字段
            $form->ignore(['zdy_match_time','zdy_coverage','zdy_home_scores','zdy_away_scores','home_tz','away_tz','home_baoliao','away_baoliao']);
        });
    }
}
