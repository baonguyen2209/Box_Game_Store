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

// Route::get('/', function () {
//     return view('admin.login');
// });

//ADMIN LOGGING
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminLoginController@login')->middleware('checkAdminLogout');
    Route::post('/', 'AdminLoginController@checkLogin');
    Route::get('logout', 'AdminLoginController@logout');
    Route::get('home', 'AdminHomeController@index')->name('home')->middleware('checkAdminLogin');
    Route::post('home/{id}', 'AdminHomeController@update');
});
//name('home') for redirect()->route('home') in AdminLoginController, or can redirect directly by redirect('admin/home') but not recommend
//ADMIN GAME MANAGEMENT
Route::prefix('admin/game')->middleware('checkAdminLogin')->group(function () {
    Route::get('index', 'AdminGameController@index');
    Route::get('view/{id}', 'AdminGameController@view');
    Route::get('create', 'AdminGameController@create');
    Route::post('create', 'AdminGameController@store');
    Route::get('delete/{id}', 'AdminGameController@delete');
    //CRUD for system requirements
    Route::get('editReq/{id}/{os}', 'AdminGameReqController@edit');
    Route::post('editReq/{id}/{os}', 'AdminGameReqController@update');
    Route::get('addReq/{id}', 'AdminGameReqController@add');
    Route::post('addReq/{id}', 'AdminGameReqController@addNew');
    Route::get('deleteReq/{id}/{os}', 'AdminGameReqController@delete');
});