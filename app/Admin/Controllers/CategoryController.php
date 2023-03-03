<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('name','分类名');
            $grid->column('code','别名');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
            #设置行操作按钮
            $grid->disableViewButton();
            $grid->disableEditButton();

            $grid->showQuickEditButton();
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
        return Show::make($id, new Category(), function (Show $show) {
            $show->field('id');
            $show->field('code');
            $show->field('name');
            $show->field('seo_title');
            $show->field('seo_description');
            $show->field('seo_keyword');
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
        #获取当前时间
        $date = date('Y-m-d H:i:s', time());
        return Form::make(new Category(), function (Form $form) use ($date) {
            $form->text('name','分类名');
            $form->text('code', '别名');
            $form->text('seo_title','标题');
            $form->text('seo_keyword','关键词');
            $form->textarea('seo_description','描述');

            $form->hidden('id');
            $form->hidden('created_at')->default($date);
            $form->hidden('updated_at')->default($date);
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
            });
        });
    }
}
