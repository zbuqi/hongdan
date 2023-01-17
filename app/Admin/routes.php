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
    $router->get('/article', 'ArticleController@index');
    $router->get('/article/{id}/edit', 'ArticleEditController@edit');
    $router->get('/match', 'CategoryController@index');
    $router->get('/seting/home', 'SetingController@home');
});
