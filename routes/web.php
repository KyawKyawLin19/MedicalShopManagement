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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware'=>['auth']], function(){
    Route::get('/user','HomeController@user');
    Route::get('/users','HomeController@userList');
    Route::get('/permissiondenied','HomeController@permission_denied');
    // Route::group(['middleware'=>['admin']], function(){
        Route::get('/admin','HomeController@admin');
    // });
});
Route::get('/home', 'HomeController@index')->name('home');
