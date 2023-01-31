<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Adv;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AdvController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Adv(), function (Grid $grid) {
            $grid->column('title');
            $grid->column('alias');
        
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
        return Show::make($id, new Adv(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('body');
            $show->field('alias');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Adv(), function (Form $form) {
            $form->text('title');
            $form->textarea('body','广告内容')->rows(10);
            $form->text('alias');
            $form->hidden('id');

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
