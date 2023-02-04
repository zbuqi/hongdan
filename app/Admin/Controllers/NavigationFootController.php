<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Navigation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Models\Navigation as nav;

class NavigationFootController extends AdminController
{
    /**
     * Make a grid builder.
     *
     *
     * @return Grid
     */
    protected function grid()
    {
        #echo $type;
        return Grid::make(new Navigation(), function (Grid $grid){

            $grid->model()->where('type','=','foot');

            //设置初始排序条件
            $grid->model()->orderBy('sequence','asc');
            #$grid->column('sequence', '序号');
            $grid->column('title', '名称')->tree();
            $grid->column('isNewWin', '新开窗口')->display(function($isNewWin){
                return $isNewWin ? '是':'否';
            });
            $grid->column('isOpen', '状态')->display(function($isOpen){
                return $isOpen ? '开启':'关闭';
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
        return Show::make($id, new Navigation(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('link');
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
        //父级
        $parents[0] = '顶级';
        foreach(nav::where('parentId','=','0')->where('type','=','foot')->get() as $nav){
            $parents[$nav->id] = $nav->title;
        }
        $sequences = nav::where('type','=','foot')->orderBy('sequence','desc')->get();
        return Form::make(new Navigation(), function (Form $form) use ($parents,$sequences){
            #获取当前时间
            $time = date('Y-m-d H:i:s', time());

            $form->text('title');
            $form->text('link','链接');
            $form->select('parentId', '父级')->options($parents);
            $form->text('sequence','序号')->default($sequences[0]['sequence']+1);
            $form->radio('isNewWin', '新开窗口')->options(['0'=>'否','1'=>'是']);
            $form->radio('isOpen', '状态')->options(['1'=>'开启','0'=>'关闭']);

            $form->hidden('id');
            $form->hidden('type')->default('foot');
            $form->hidden('created_at')->default($time);
            $form->hidden('updated_at')->default($time);

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
