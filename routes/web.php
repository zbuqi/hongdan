<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('index');
});
Route::get('/category/{name}', function(){
    return view('category');
});
*/

Route::get('/', [IndexController::class, 'show']);
Route::get('/category/{name}', [CategoryController::class, 'show']);
Route::get('/article/{id}', [ArticleController::class, 'show']);