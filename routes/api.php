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

Route::group(['namespace' => 'Api'], function(){
    Route::group(['prefix' => 'menu'], function(){
        Route::get('{type}', 'MenuController@index');
    });

    Route::group(['prefix' => 'pages'], function(){
        Route::get('/', 'PagesController@index')->name('api.pages');
        Route::get('/read', 'PagesController@index')->name('api.pages.read');
    });

    Route::group(['prefix' => 'post'], function(){
        Route::get('/', 'PostController@index')->name('api.post.index');
        Route::get('/category', 'PostController@category')->name('api.post.category');
    });

    Route::group(['prefix' => 'opd'], function(){
        Route::get('/', 'OpdController@index')->name('api.opd.index');
        // Route::get('/category', 'PostController@category')->name('api.opd.category');
        Route::get('/read', 'OpdController@read')->name('api.opd.read');
    });

});
