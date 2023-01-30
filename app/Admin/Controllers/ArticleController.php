<?php

namespace App\Admin\Controllers;

use App\Models\Article;
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
        return Grid::make(new Article(), function (Grid $grid) {
            #$grid->column('id')->sortable();
            #$grid->number('序号');
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
        foreach(Category::get() as $category){
            $categorys[$category->id] = $category->name;
        }

        return Form::make(new Article(), function (Form $form) use ($categorys) {
            
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
            #获取当前时间
            $created_at = date('Y-m-d H:i:s', time());

            $form->text('title', '标题');
            $form->select('categoryId', '栏目')->options($categorys);
            $form->text('created_at', '创建时间')->default($created_at);
            $form->text('source', '来源');
            $form->text('sourceUrl', '来源地址');
            $form->image('thumb', '缩略图')->move(date('Y-m-d', time()))->uniqueName()->autoUpload();
            $form->checkbox('recommend', '资讯属性')->options($recommend)->default($recommend_default, true);
            $form->textarea('excerpt', '简介')->rows(5);
            $form->editor('body', '正文');

            $form->hidden('id');
            $form->hidden('tagIds')->default(0);
            $form->hidden('promoted')->default(0);
            $form->hidden('featured')->default(0);
            $form->hidden('hits')->default(rand(100,300));
            $form->hidden('userId')->default(1);
            $form->hidden('updated_at')->default($created_at);
            $form->submitted(function (Form $form) {
                /*缩略图*/
                if(!strstr($form->thumb, 'uploads')){
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

                $content = json_encode($recommend, JSON_UNESCAPED_UNICODE);
                $file = fopen('D:\www\ces.txt', 'w+');
                fwrite($file, $content);
                fclose($file);

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
