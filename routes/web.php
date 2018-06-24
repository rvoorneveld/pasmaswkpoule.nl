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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ranking', 'RankingController@index')->name('ranking');
Route::get('/stadions', 'StadiumController@index')->name('stadium');
Route::get('/spelregels', 'RulesController@index')->name('rules');
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::resource('games', 'GamesController');
Route::post('/games/save', 'GamesController@save');

Route::get('/admin/games', 'Admin\GamesController@index')->name('admin.games')->middleware('admin');
Route::post('/admin/games/save', 'Admin\GamesController@save')->middleware('admin');
Route::post('/admin/games/store', 'Admin\GamesController@store')->middleware('admin');

Route::resource('/admin/users', 'Admin\UsersController')->middleware('admin');
Route::get('/admin/users/{id}/delete', 'Admin\UsersController@delete')->middleware('admin');

Route::resource('/admin/stadiums', 'Admin\StadiumsController')->middleware('admin');
Route::get('/admin/stadiums/{id}/delete', 'Admin\StadiumsController@delete')->middleware('admin');

Route::resource('/admin/countries', 'Admin\CountriesController')->middleware('admin');
Route::get('/admin/countries/{id}/delete', 'Admin\CountriesController@delete')->middleware('admin');