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

        // Reworked Endpoint
         Route::get('getmovies', ['getmovies' => 'create', 'uses' => 'MovieListController@getmovies']);
         Route::post('comment', ['as' => 'comment', 'uses' => 'CommentController@addComment']);
         Route::get('comment', ['as' => 'comment', 'uses' => 'CommentController@allcomment']);
          
          
          
          // OLD AND WRONG ENDPOINT
          //Create Movie Endpoint
         // Route::post('create', ['as' => 'create', 'uses' => 'MovieListController@createmovie']);
         
         // Route::any('search', ['as' => 'search', 'uses' => 'MovieListController@search']);
          
         // Route::get('showmovies', ['showmovies' => 'create', 'uses' => 'MovieListController@showmovies']);
          //Route::get('showmovies/{id}', ['showmovies.id' => 'create', 'uses' => 'MovieListController@showmovies']);
          
          
    });
 
});