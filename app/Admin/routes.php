<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->resource('user', 'UserController');
    #文章
    $router->resource('article', 'ArticleController');
    #分类
    $router->resource('category', 'CategoryController');
    #精彩评论
    $router->resource('match/comment', 'CommentController');
    #赛程列表
    $router->resource('match/list', 'MatchController');

    #赛程阵容球员修改
    $router->get('match/{match_id}/{code}/{id}/edit', 'MatchTeamController@index');

    #广告
    $router->resource('seting/adv','AdvController');
    #首页海报
    $router->resource('seting/pc-banner','PcBannerController');
    $router->resource('seting/m-banner','MobileBannerController');

    #导航链接
    $router->resource('seting/navigation/top', 'NavigationTopController');
    $router->resource('seting/navigation/m-foot', 'NavigationMobileFootController');
    $router->resource('seting/navigation/foot', 'NavigationFootController');
    $router->resource('seting/navigation/firend', 'NavigationFirendController');
    #网站信息
    $router->resource('seting/site','SiteController');
    #客服设置
    $router->resource('seting/kefu','ConsultController');
});
