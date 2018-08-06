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

    Route::get('/acrud/{anime}', [
        'uses' => 'AnimeController@show',
        'as' => 'anime.show'
    ]);

    Route::get('/acrud/edit/{anime}', [
        'uses' => 'AnimeController@edit',
        'as' => 'anime.edit'
    ]);

    Route::put('/acrud/update/{anime}', [
        'uses' => 'AnimeController@update',
        'as' => 'anime.update'
    ]);

    Route::delete('/acrud/destroy/{anime}', [
        'uses' => 'AnimeController@destroy',
        'as' => 'anime.destroy'
    ]);

    Route::get('/acrud/{anime}/addch', [
        'uses' => 'AnimeController@addch',
        'as' => 'anime.addch'
    ]);

    Route::get('/acrud/{anime}/addcr', [
        'uses' => 'AnimeController@addcr',
        'as' => 'anime.addcr'
    ]);

    Route::post('/acrud/{anime}/createch', [
        'uses' => 'AnimeController@createch',
        'as' => 'anime.createch'
    ]);

    Route::post('/acrud/{anime}/createcr', [
        'uses' => 'AnimeController@createcr',
        'as' => 'anime.createcr'
    ]);

    Route::get('/acrud/{anime}/editch/{character}', [
        'uses' => 'AnimeController@editch',
        'as' => 'anime.editch'
    ]);

    Route::get('/acrud/{anime}/editcr/{creator}', [
        'uses' => 'AnimeController@editcr',
        'as' => 'anime.editcr'
    ]);

    Route::put('/acrud/{anime}/updatech/{character}', [
        'uses' => 'AnimeController@updatech',
        'as' => 'anime.updatech'
    ]);

    Route::put('/acrud/{anime}/updatecr/{creator}', [
        'uses' => 'AnimeController@updatecr',
        'as' => 'anime.updatecr'
    ]);

    Route::delete('/acrud/{anime}/destorych/{character}', [
        'uses' => 'AnimeController@destroych',
        'as' => 'anime.destroych'
    ]);

    Route::delete('/acrud/{anime}/destorycr/{creator}', [
        'uses' => 'AnimeController@destroycr',
        'as' => 'anime.destroycr'
    ]);
});

/*
* Main routes 
*/

Route::group([

], function () {
    Route::get('/', [
        'uses' => 'MainController@index',
        'as' => 'main.index'
    ]);

    Route::get('/docs', [
        'uses' => 'MainController@docs',
        'as' => 'main.docs'
    ]);

    Route::get('/example', [
        'uses' => 'MainController@example',
        'as' => 'main.example'
    ]);
});