<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Comment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Models\AdminUser as User;

class CommentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(), function (Grid $grid){
            $grid->model()->where('type','=','match');

            $grid->column('typeId','赛程');
            $grid->column('content','评论内容')->display(function($content){
                $content = strip_tags($content);
                if(strlen($content)>80){
                    $content = mb_substr($content, 0,28,"utf-8") . '...';
                }
                return $content;
            });
            $grid->column('userId', '作者')->display(function($userId){
                $user = User::where('id',$userId)->get();
                return $user[0]->name;
            });
            $grid->column('updated_at');

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
        return Show::make($id, new Comment(), function (Show $show) {
            $show->field('id');
            $show->field('type');
            $show->field('typeId');
            $show->field('userId');
            $show->field('content');
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
        foreach(User::get() as $user){
            $users[$user->id] = $user->name;
        }
        return Form::make(new Comment(), function (Form $form) use ($users) {
            $form->select('typeId','选择赛程')->options(['123456'=>'世界杯&nbsp;&nbsp;克罗地亚VS巴西&nbsp;&nbsp;12-10 23:00']);

            $form->select('userId','选择作者')->options($users);
            $form->editor('content','内容');

            $form->hidden('id');
            $form->hidden('created_at');
            $form->hidden('updated_at');

            $form->tools(function(Form\Tools $tools){
                // 去掉跳转列表按钮
                $tools->disableList();
                // 去掉跳转详情页按钮
                $tools->disableView();
                // 去掉删除按钮
                $tools->disableDelete();
            });
            $form->footer(function($footer){
                // 去掉`重置`按钮
                $footer->disableReset();
                // 去掉`查看`checkbox
                $footer->disableViewCheck();
                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();
                // 去掉`继续新增`checkbox
                $footer->disableCreatingCheck();
            });

        });
    }
}
