<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Admin\Repositories\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

use App\Models\Category;

class ArticleEditController extends Controller
{
    public function index($id, content $content)
    {   
        //$data = Show::make($id, new Article());
        return $content
            ->header('编辑')
            ->description($id)
            ->body(Form::make(new Article(), function (Form $form){
                $form->column(12, function(Form $form){
                    foreach(Category::get() as $category){
                        $categorys[] = $category->name;
                    }
                    $form->text('title', '标题');
                    $form->select('categoryId', '栏目')->options($categorys);
                    $form->text('created_at');
                    $form->text('source', '来源名称');
                    $form->text('sourceUrl', '来源地址');
                    $form->image('thumb', '设置缩略图');
                    $form->editor('body', '正文');
                });
            }));

                /*
                $row->column(12,function(column $column){
                    $column->row(function(row $row){
                        $row->column(8, Form::make(new Article(), function(Form $form){
                            $form->display('id');
                            $form->text('title', '标题');
                        }));
                        $row->column(4, Form::make(new Article(), function(Form $form){
                            $form->display('id');
                            $form->text('title', '标题');
                        }));
                    });
                });
                */
        /*
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->text('title', '标题');
            foreach(Category::get() as $category){
                $categorys[] = $category->name;
            }
            $form->select('categoryId', '栏目')->options($categorys);
            $form->textarea('body');
            $form->textarea('excerpt','摘要');
            $form->text('tagIds');
            $form->text('source');
            $form->text('sourceUrl');
            $form->text('publishedTime');
            $form->text('thumb');
            $form->text('hits');
            $form->text('userId');
            $form->display('created_at');
            $form->display('updated_at');


                $form->display('id', 'ID');
                foreach(Category::get() as $category){
                    $categorys[] = $category->name;
                }
                $form->text('title', '标题');
                $form->select('categoryId', '栏目')->options($categorys);
                $form->editor('body', '正文');


        });
        */
    }

}
