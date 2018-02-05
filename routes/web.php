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
    return view('index');
});


Route::get('/Autism-Center', 'CenterController@autism')->name('Autism.center');
Route::get('/Special-Education-Center', 'CenterController@specialeducation')->name('SpecialEducation.center');
Route::get('/Shop', 'ShopController@index')->name('Shop.Index');


//Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
