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

Route::get('/', 'HomeController@index');
Route::post('ucapan/add','HomeController@store');


Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard','DashboardController@index');

    //banner
    Route::get('banner/{id}','BannerController@add');
    Route::put('banner/update/{id}','BannerController@update');

    //mempelai
    Route::get('mempelai/{id}','MempelaiController@add');
    Route::put('mempelai/update/{id}','MempelaiController@update');

    //Family
    Route::get('family','FamilyController@index');
    Route::get('family/add','FamilyController@add');
    Route::post('family/add','FamilyController@store');
    Route::get('family/edit/{id}','FamilyController@edit');
    Route::put('family/update/{id}','FamilyController@update');
    Route::delete('family/delete/{id}','FamilyController@delete');

    //akad
    Route::get('akad/{id}','AkadController@add');
    Route::put('akad/updateakad/{id}','AkadController@updateakad');

    //ucapan
    Route::get('ucapan_kalian','UcapanController@index');
    Route::delete('delete/ucapan/{id}', 'UcapanController@delete');

    //galery
    Route::get('galeries', 'GaleryController@index');
    Route::post('galery/add','GaleryController@add');
    Route::delete('galery/delete/{id}','GaleryController@delete');
});


Route::get('/home', function () {
    return redirect('dashboard');
});

Route::get('/keluar', function () {
    \Auth::logout();
    return redirect('/');
});