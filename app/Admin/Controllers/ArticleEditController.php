<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Admin\Repositories\Articles;
use Dcat\Admin\Form;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

use App\Models\Category;
use App\Models\Article;

class ArticleEditController extends Controller
{
    public function edit($id, content $content)
    {   
        //$data = Show::make($id, new Article());
        foreach(Category::get() as $category){
            $categorys[$category->id] = $category->name;
        }
        $article = Article::findOrFail($id);
        return $content
            ->header('编辑')
            ->description($article->title)
            ->body(Form::make(new Articles(), function (Form $form) use ($article, $categorys){
                $form->column(12, function(Form $form) use ($article,$categorys){
                    $attribute = ['promoted' => '推荐','featured' => '头条'];
                    $attribute_default = [];
                    if($article->promoted){
                        $attribute_default[] = 'promoted';
                    }
                    if($article->featured){
                        $attribute_default[] = 'featured';
                    }

                    $form->text('title', '标题')->value($article->title);
                    $form->select('categoryId', '栏目')->options($categorys)->default($article->categoryId);
                    $form->text('created_at')->value($article->created_at);
                    $form->text('source', '来源名称')->value($article->source);
                    $form->text('sourceUrl', '来源地址')->value($article->sourceUrl);
                    $form->image('thumb', '设置缩略图')->value($article->thumb);
                    $form->checkbox('attribute','资讯属性')->options($attribute)->default($attribute_default);
                    $form->editor('body', '正文')->value($article->body);

                    /*改变表单样式*/
                    $form->tools(function(Form\Tools $tools){
                        /* 去掉跳转列表按钮 */
                        $tools->disableList();
                    });
                    $form->footer(function($footer){
                        /* 去掉`重置`按钮 */
                        $footer->disableReset();
                        /*去掉继续创建*/
                        $footer->disableCreatingCheck();
                        /* 去掉`继续编辑`checkbox */
                        $footer->disableEditingCheck();
                        /* 去掉`查看`checkbox */
                        $footer->disableViewCheck();
                    });
                });
            }));
    }

}
