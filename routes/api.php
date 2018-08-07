<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

], function(){
    /*
    * Routes to get anime
    */

    Route::get('anime', 'AnimeAPIController@index');
    Route::get('animenew', 'AnimeAPIController@animenew');
    Route::get('anime/{anime}', 'AnimeAPIController@show');

    /*
    * Routes to get character for anime
    */

    Route::get('anime/{anime}/characters', 'AnimeAPIController@indexch');
    Route::get('anime/{anime}/character/{character}', 'AnimeAPIController@showch');
    Route::get('characters/', 'AnimeAPIController@showallch');
    Route::get('character/{character}', 'AnimeAPIController@showchbyid');
     
    /*
    * Routes to get creator for anime
    */

    Route::get('anime/{anime}/creators', 'AnimeAPIController@indexcr');
    Route::get('anime/{anime}/creator/{creator}', 'AnimeAPIController@showcr');
    Route::get('creators/', 'AnimeAPIController@showallcr');
    Route::get('creator/{creator}', 'AnimeAPIController@showcrbyid');
});

