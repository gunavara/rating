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


Route::any('/', 'HomeController@home');
Route::get('/test', 'HomeController@test');
Route::get('/rate', 'HomeController@rate');
Route::post('/selectprocedure', 'HomeController@selectprocedure');
Route::post('/savevote', 'HomeController@saveVote');
Route::get('/results', 'HomeController@results');
Route::view('/error', 'error');
