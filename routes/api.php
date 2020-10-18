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


//List Articles
Route::get('articles', 'ArticleController@index');

//List single articles
Route::get('articles/{id}', 'ArticleController@show');

//List create article

Route::post('articles', 'ArticleController@store');

// update an articles

Route::put('article', 'ArticleController@store');

//delete an articles

Route::delete('article/{id}', 'ArticleController@destroy');



