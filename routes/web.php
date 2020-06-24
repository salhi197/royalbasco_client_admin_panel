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

Route::view('/', 'welcome');
Auth::routes(['verify' => true]);
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');

Route::view('/home', 'home')->middleware('auth');

Route::group(['middleware' => 'auth:writer'], function () {
    Route::view('/writer', 'writer');
});




Route::group(['prefix' => 'user/demande', 'as' => 'user.demande'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'UserDemandeController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'UserDemandeController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'UserDemandeController@store']);
    Route::get('/destroy/{id_demande}', ['as' => '.destroy', 'uses' => 'UserDemandeController@destroy']);    
    Route::get('/edit/{id_demande}', ['as' => '.edit', 'uses' => 'UserDemandeController@edit']);
    Route::get('/show/{id_demande}', ['as' => '.show', 'uses' => 'UserDemandeController@show']);
    Route::post('/update/{id_demande}', ['as' => '.update', 'uses' => 'UserDemandeController@update']);    
});

Route::group(['prefix' => 'admin/demandes', 'as' => 'admin.demande'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'AdminDemandeController@index']);
    Route::get('/confirm/{id_demande}', ['as' => '.confirm', 'uses' => 'AdminDemandeController@confirm']);    
});

Route::group(['prefix' => 'admin/users', 'as' => 'admin.user'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'AdminUserController@index']);
});



Route::get('/home', 'HomeController@index')->name('home');
