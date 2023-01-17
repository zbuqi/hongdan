<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Articles;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Models\Category;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Articles(), function (Grid $grid) {
            $grid->number('序号');
            $grid->column('title');
            $grid->column('categoryId', '栏目')->display(function($categoryId){
                return Category::find($categoryId)->name;
            });
            $grid->column('updated_at')->sortable();
            $grid->column('created_at');
        
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('categoryId');
            $show->field('body');
            $show->field('excerpt');
            $show->field('tagIds');
            $show->field('source');
            $show->field('sourceUrl');
            $show->field('publishedTime');
            $show->field('thumb');
            $show->field('hits');
            $show->field('userId');
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
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('categoryId');
            $form->text('body');
            $form->text('excerpt');
            $form->text('tagIds');
            $form->text('source');
            $form->text('sourceUrl');
            $form->text('publishedTime');
            $form->text('thumb');
            $form->text('hits');
            $form->text('userId');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
