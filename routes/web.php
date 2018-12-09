<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('show-articles', 'ArticleController@showArticles')->name('showArticles');

Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::get('write-article', 'ArticleController@writeArticle')->name('writeArticle');
Route::post('publish-article/{id}', 'ArticleController@store')->name('publishArticle');


