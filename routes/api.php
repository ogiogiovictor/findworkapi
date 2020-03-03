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

Route::group(['middleware' => ['forcejson']], function () {
    
    Route::group(['prefix' => 'movie'], function () {

          //Create Movie Endpoint
          Route::post('create', ['as' => 'create', 'uses' => 'MovieListController@createmovie']);
          Route::post('comment', ['as' => 'comment', 'uses' => 'CommentController@addComment']);
          Route::any('search', ['as' => 'search', 'uses' => 'MovieListController@search']);
          
          Route::get('showmovies', ['showmovies' => 'create', 'uses' => 'MovieListController@showmovies']);
          Route::get('showmovies/{id}', ['showmovies.id' => 'create', 'uses' => 'MovieListController@showmovies']);
          
          
    });
 
});