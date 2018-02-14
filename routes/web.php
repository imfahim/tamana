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


Route::get('/Autism-Centre', 'CentreController@autism')->name('Autism.centre');
Route::get('/Special-Education-Centre', 'CentreController@specialeducation')->name('SpecialEducation.centre');
Route::get('/Shop', 'ShopController@index')->name('Shop.Index');
Route::get('/Skill-Development-Centre', 'CentreController@skilldevelopment')->name('SkillDevelopment.centre');
Route::get('/Kindergarten', 'CentreController@Kindergarten')->name("Kindergarten.centre");

Route::get('/about-us/board-members', 'AboutController@page_board_members')->name('About.Board_Members');



//Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
