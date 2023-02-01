<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Seting;
use App\Http\Controllers\Controller;
use Dcat\Admin\Form;
use Dcat\Admin\Layout\Content;

class SiteController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->body($this->form());
    }

    
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Seting(), function (Form $form) {
            $form->text('name');
            $form->text('value');
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
