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

// Route::name('home_path')->get('/', 'PagesController@home');
Route::get('/', [
    'as' => 'home',
    'uses' => 'EventsController@index'
]);

Route::resource('events', 'EventsController');
