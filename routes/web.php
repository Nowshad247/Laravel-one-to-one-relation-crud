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
Route::get('/','usercontroller@home')->name('index');
Route::get('/user','usercontroller@user')->name('user');
Route::get('/creat','usercontroller@creat')->name('creat');
Route::post('/creat','usercontroller@store');
Route::get('/profile/{id}','usercontroller@profileinfo');
Route::get('/update/{id}','usercontroller@update');
Route::patch('/update/{id}','usercontroller@updatesuc');
Route::get('/distroy/{id}','usercontroller@distroy');
