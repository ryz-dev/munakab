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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::group(['prefix' => 'messaging', 'namespace' => 'Admin'],function(){
        Route::get('/', 'MessagingController@index')->name('admin.messaging');
        Route::get('/read/{id}', 'MessagingController@read')->name('admin.messaging.read');
    });
});
