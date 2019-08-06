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

// Example Routes
Route::match(array('get','post'),'/', 'PageController@landing')->name('landing');
Route::match(array('get','post'),'/location','PageController@location')->name('toLocation');
Route::post('/skill','PageController@skill')->name('toSkill');
Route::post('/finder','FinderController@show')->name('toFinder');