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

//HomePage
Route::get('/', 'HomepageController@index')->name('index');
//Header
Route::get('/indexHeader', 'HeaderController@index')->name('indexHeader');
Route::post("/updateHeader{id}", "HeaderController@update")->name("updateHeader");







//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
