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
Auth::routes();

Route::get('/', function () {
    if ((Auth::user()) && Auth::user()->role_id == '1') {
        return redirect('admin/home');
    } else {
        return redirect('login');
    }
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('roles', 'Admin\RolesController');
    Route::get('settings', 'Admin\SettingController@index');
    Route::post('settings/update', 'Admin\SettingController@update');
    Route::get('profile', 'ProfileController@edit');
    Route::post('profile/update', 'ProfileController@update');
});

