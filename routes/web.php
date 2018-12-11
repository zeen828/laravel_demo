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

Route::group(['prefix' => 'test_1'], function () {
    //php artisan make:controller Test_1/HomeController
    Route::get('/index', 'Test_1\HomeController@index');
    //php artisan make:controller Test_1/SearchController
    Route::get('/search', 'Test_1\SearchController@index');
    //php artisan make:controller Test_1/RankingController
    Route::get('/ranking', 'Test_1\RankingController@index');
    //php artisan make:controller Test_1/ShoptopController
    Route::get('/shoptop', 'Test_1\ShoptopController@index');
    Route::get('/shoptop/{id}', 'Test_1\ShoptopController@store');
    //php artisan make:controller Test_1/ShopcommentController
    Route::get('/shopcomment', 'Test_1\ShopcommentController@index');
    Route::get('/shopcomment/{id}', 'Test_1\ShopcommentController@index');
});
