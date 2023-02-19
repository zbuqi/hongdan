<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MatchListController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\MatchPostController;

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
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{code}', [CategoryController::class, 'show']);
Route::get('/article/{id}.html', [ArticleController::class, 'show']);
Route::get('/match_list/{name}', [MatchListController::class, 'show']);
Route::get('/match/{id}.html', [MatchController::class, "show"]);
Route::get('/match/post/publish',[MatchPostController::class, "show"]);
