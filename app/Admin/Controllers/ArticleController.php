<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Models\Category;

use App\Http\Middleware\SeoPush;
use App\Http\Middleware\isMobile;
use App\Models\Seting;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            #$grid->column('id')->sortable();
            $grid->number('序号');
            $grid->model()->orderBy('id','desc');
            $grid->column('title');
            $grid->column('categoryId', '栏目')->display(function($categoryId){
                return Category::find($categoryId)->name;
            });
            $grid->column('created_at', '创建时间');
            $grid->column('updated_at', '更新时间')->sortable();

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
            $show->field('promoted');
            $show->field('featured');
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
        return Form::make(new Article(), function (Form $form){

            $form->block(8, function(Form\BlockForm $form){
                $form->title('主要内容');
                // 显示底部提交按钮
                $form->showFooter();
                // 设置字段宽度
                $form->width(11, 1);

                $form->column(12, function(Form\BlockForm $form){
                    foreach(Category::get() as $category){
                        $categorys[$category->id] = $category->name;
                    }
                    $form->text('title', '标题')->rules('required|max:30',[
                        'required'=>'标题不能为空',
                        'max'=>'标题最多不能超过30个字'
                    ]);
                    $form->select('categoryId', '栏目')->options($categorys)->rules('required',['required'=>'栏目不能为空']);
                    $form->textarea('excerpt', '简介')->rows(5);
                    $form->editor('body', '正文');
                });
            });
            $form->block(4, function(Form\BlockForm $form){
                $form->width(9, 3);

                $recommend = ['promoted' => '推荐','featured' => '头条'];
                $recommend_default = [];
                $promoted = $form->model()->promoted;
                $featured = $form->model()->featured;
                if($promoted){
                    $recommend_default[] = 'promoted';
                }
                if($featured){
                    $recommend_default[] = 'featured';
                }

                $form->title('资讯属性');
                $form->checkbox('recommend','')->options($recommend)->default($recommend_default, true);

                $form->next(function(Form\BlockForm $form){
                    $form->width(8, 3);
                    $form->title('来源设置');
                    $form->text('source', '来源名称');
                    $form->text('sourceUrl', '来源地址');
                });
                $form->next(function(Form\BlockForm $form){
                    $form->width(8, 3);
                    $form->title('设置缩略图');
                    $form->image('thumb', '缩略图')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();
                });
                $form->next(function(Form\BlockForm $form){
                    $form->width(8, 3);
                    #获取当前时间
                    $time = date('Y-m-d H:i:s', time());
                    $form->title('发布时间');
                    $form->text('created_at', '发布时间')->default($time);
                    $form->hidden('updated_at')->default($time);
                });
            });

            $form->hidden('id');
            $form->hidden('tagIds')->default(0);
            $form->hidden('promoted')->default(0);
            $form->hidden('featured')->default(0);
            $form->hidden('hits')->default(rand(100,300));
            $form->hidden('userId')->default(1);
            /*表单提交前调用*/
            $form->submitted(function (Form $form) {
                /*缩略图*/
                if($form->thumb != '' && !strstr($form->thumb, 'uploads')){
                    $form->thumb = '/uploads/' . $form->thumb;
                }
                /*内容简介*/
                $body = strip_tags($form->body);
                if($form->excerpt == ''){
                    $form->excerpt = mb_substr($body,0,100,'utf-8');
                };
                /*资讯属性： in_array 第二参数不能为空*/
                $recommend = $form->recommend;
                $recommend[] = '1';

                if(in_array('promoted', $recommend)){
                    $form->promoted = 1;
                }else{
                    $form->promoted = 0;
                }
                if(in_array('featured', $recommend)){
                    $form->featured = 1;
                }else{
                    $form->featured = 0;
                }
            });

            /*保存后回调*/
            $form->saved(function(Form $form){
                /*判断是否是新增*/
                if($form->isCreating()){
                    $newId = $form->getkey();
                    if(!$newId){
                        return $form->error('数据保存失败');
                    }else{
                        /*百度推送*/
                        $site = Seting::where('name','site')->first();
                        $site = json_decode($site->value);
                        $link = $site->host . '/article/' . $newId . '.html';
                        $data = new SeoPush;
                        $data = $data->baidu($link);
                        $data = json_decode($data);
                        $data = '提交成功，推送成功' . $data->success . '条，今日还可推送' . $data->remain;
                        return $form->response()->success($data)->redirect('article');
                    }
                }
                return;
            });
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
            /*忽略掉不需要保存的字段*/
            $form->ignore(['recommend']);
        });
    }
}
