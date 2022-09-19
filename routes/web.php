<?php

use Illuminate\Support\Facades\Route;

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

// ROTTA HOME
Route::get('/', 'HomeController@index')->name('home');

//ROTTA MOVIE
Route::get('/movies', 'MovieController@index')->name('movie');
