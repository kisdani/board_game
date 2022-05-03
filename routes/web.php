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

Route::get('/', 'IndexController@home')->name('home');
Route::get('boardgames', 'BoardGameController@list')->name('boardgames');
Route::get('boardgames/game/{name}', 'BoardGameController@boardGame')->name('boardgame');
Route::get('contact', 'ContactController@contact')->name('contact');
Route::get('boardgames/category/{category}', 'BoardGameController@boardGameCategory')->name('category');
Route::get('boardgames/search', 'BoardGameController@search')->name('search');
