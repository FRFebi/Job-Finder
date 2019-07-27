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
Route::get('/', 'PageController@landing');
Route::post('/tolocation','PageController@toLocation')->name('toLocation');
Route::post('/toskill','PageController@toSkill')->name('toSkill');
Route::post('/tofinder','PageController@toFinder')->name('toFinder');