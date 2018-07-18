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

Route::get('/','Web\HomeController@index')->name('index');
Route::get('/about','Web\HomeController@getAbout')->name('about');
Route::get('/articles','Web\HomeController@getArticles')->name('articles');
Route::get('/articles/details/{id}','Web\HomeController@getArticleDetails')->name('article.details');
Route::get('/training','Web\HomeController@getTraining')->name('training');
Route::get('/training/{id}','Web\HomeController@getTrainingId')->name('training.id');
Route::get('/publications','Web\HomeController@getPublications')->name('publications');
Route::get('/origami-club','Web\HomeController@getClub')->name('club');
Route::get('/videos','Web\HomeController@getVideos')->name('videos');
Route::get('/news','Web\HomeController@getNews')->name('news');
Route::get('/news/details/{id}','Web\HomeController@getNewsDetails')->name('news.details');
Route::get('/our-team','Web\HomeController@getTeams')->name('teams');
Route::get('/community-service','Web\HomeController@getCommunityServices')->name('community');
Route::get('/community-service/details/{id}','Web\HomeController@getCommunityServicesDetails')->name('community.details');

Route::get('/products/details/{id}','Web\HomeController@getProductDetails')->name('product.details');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
