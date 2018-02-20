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
})->name('index');

Route::get('/webpanel','Panel\PanelController@index')->name('panel.index');
Route::get('/webpanel/categories','Panel\CategoryController@index')->name('panel.category.index');
Route::get('/webpanel/categories/create','Panel\CategoryController@create')->name('panel.category.create');





Route::get('/Autism-Centre', 'CentreController@autism')->name('Autism.centre');
Route::get('/Special-Education-Centre', 'CentreController@specialeducation')->name('SpecialEducation.centre');
Route::get('/Shop', 'ShopController@index')->name('Shop.Index');
Route::get('/Shop/details', 'ShopController@details')->name('Shop.details');

Route::get('/Skill-Development-Centre', 'CentreController@skilldevelopment')->name('SkillDevelopment.centre');
Route::get('/Kindergarten', 'CentreController@Kindergarten')->name("Kindergarten.centre");
Route::get('/training','TrainingController@index')->name('training.index');
Route::get('/services/apna-fun-club','ServicesController@ApnaFunClub')->name('services.apna-fun-club');
Route::get('/research','ResearchController@index')->name('research.index');
Route::get('/about-us/board-members', 'AboutController@page_board_members')->name('About.Board_Members');
Route::get('/volunteer','PagesController@volunteer')->name('pages.volunteer');
Route::get('/vacancy','PagesController@vacancy')->name('pages.vacancy');
Route::get('/contact','PagesController@contact')->name('pages.contact');



//Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');

//Achievements
Route::get('/achievements/organization', 'AchievementController@organization')->name('Organization.achievements');
Route::get('/achievements/students-alumni', 'AchievementController@students_alumni')->name('students-alumni.achievements');
Route::get('/achievements/media-coverage', 'AchievementController@media_coverage')->name('media_coverage.achievements');
Route::get('/achievements/recognition', 'AchievementController@recognition')->name('recognition.achievements');

//Services
Route::get('/services/nios', 'ServicesController@nios')->name('Services.nios');
Route::get('/services/boys-hostel', 'ServicesController@boys_hostel')->name('Services.boys-hostel');

Route::get('/donation', 'DonateController@page_donate')->name('donate.page');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/events', 'EventsController@index')->name('events');



// Panels
Route::resource('/products', 'Panel\ProductController');
