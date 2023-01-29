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
    $router->resource('seting/navigation', 'NavigationController');
    #$router->resource('seting/{code}', 'SetingController@show');
});
