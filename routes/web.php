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
    //return view('welcome');
     return view('layout.blanck_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/roles', 'Admin\\rolesController');