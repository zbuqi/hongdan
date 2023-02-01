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
    $router->resource('article', 'ArticleController');
    #导航链接
    $router->resource('seting/navigation/top', 'NavigationTopController');
    $router->resource('seting/navigation/firendLink', 'NavigationFirendController');
    $router->resource('seting/navigation/footerLink1', 'NavigationFooter1Controller');
    $router->resource('seting/navigation/footerLink2', 'NavigationFooter2Controller');
    
    #精彩评论
    $router->resource('match/comment', 'CommentController');

    #广告
    $router->resource('adv','AdvController');

    #网站信息
    #$router->get('seting/site','SiteController@index');
    #$router->post('seting/site','SiteController@index');
    
    $router->resource('seting/site','SiteController');
});
