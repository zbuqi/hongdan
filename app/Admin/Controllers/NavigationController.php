<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Navigation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NavigationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        
        return Grid::make(new Navigation(), function (Grid $grid){
            //添加默认查询条件
            $type = $_SERVER["QUERY_STRING"];
            if($type == 'type=top'){
                $grid->model()->where('type','=','top');
            }elseif($type == 'type=firendLink'){
                $grid->model()->where('type','=','firendLink');
            }else{
                $grid->model()->where('type','=','top');
            }
            print_r($type);
            
            //设置初始排序条件
            $grid->model()->orderBy('sequence','asc');
            $grid->column('name', '名称');
            $grid->column('isNewWin', '新开窗口')->display(function($isNewWin){
                return $isNewWin ? '是':'否';
            });
            $grid->column('isOpen', '状态')->display(function($isOpen){
                return $isOpen ? '开启':'关闭';
            });
            $grid->column('created_at');
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
        return Show::make($id, new Navigation(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('url');
            $show->field('sequence');
            $show->field('parentId');
            $show->field('type');
            $show->field('isOpen');
            $show->field('isNewWin');
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
        return Form::make(new Navigation(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('url');
            $form->text('sequence');
            $form->text('parentId');
            $form->text('type');
            $form->text('isOpen');
            $form->text('isNewWin');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
