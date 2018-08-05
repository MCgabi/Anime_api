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



Auth::routes();

/*
* CRUD routes 
*/

Route::group([
    'middleware' => 'auth'
], function (){
    Route::get('/acrud', [
        'uses' => 'AnimeController@index',
        'as' => 'anime.index'
    ]);

    Route::get('/acrud/create', [
        'uses' => 'AnimeController@create',
        'as' => 'anime.create'
    ]);

    Route::post('/acrud/add', [
        'uses' => 'AnimeController@add',
        'as' => 'anime.add'
    ]);

    Route::get('/acrud/{id}', [
        'uses' => 'AnimeController@show',
        'as' => 'anime.show'
    ]);
});

/*
* Main routes 
*/

Route::group([

], function () {

});