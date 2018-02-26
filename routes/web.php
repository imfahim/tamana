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

Route::get('/Autism-Centre', 'CentreController@autism')->name('Autism.centre');
Route::get('/Special-Education-Centre', 'CentreController@specialeducation')->name('SpecialEducation.centre');


Route::get('/Skill-Development-Centre', 'CentreController@skilldevelopment')->name('SkillDevelopment.centre');
Route::get('/Kindergarten', 'CentreController@Kindergarten')->name("Kindergarten.centre");
Route::get('/training','TrainingController@index')->name('training.index');
Route::get('/services/apna-fun-club','ServicesController@ApnaFunClub')->name('services.apna-fun-club');
Route::get('/research','ResearchController@index')->name('research.index');
Route::get('/about-us/board-members', 'AboutController@page_board_members')->name('About.Board_Members');
Route::get('/volunteer','PagesController@volunteer')->name('pages.volunteer');
Route::get('/vacancy','PagesController@vacancy')->name('pages.vacancy');
Route::get('/contact','PagesController@contact')->name('pages.contact');

// Shop
// Cart Routes

Route::group(['prefix' => 'shop'], function()
{
  Route::get('/', 'ShopController@index')->name('shop.index');
  Route::get('filter/{id}','ShopController@filter')->name('shop.filter');
  Route::post('checkout','CartController@checkout')->name('shop.checkout');
  Route::post('checkout/confirm','CartController@confirm')->name('shop.confirm');

  Route::get('details/{id}', 'ShopController@show')->name('shop.details');

  Route::get('cart', 'CartController@index')->name('Shop.cart');
  Route::post('cart', 'CartController@store')->name('cart.store');
  Route::delete('cart/{id}', 'CartController@destroy')->name('cart.destroy');
});



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
Route::group(['prefix' => 'webpanel',  'middleware' => 'auth'], function()
{
    Route::get('/','Panel\PanelController@index')->name('panel.index');
    Route::get('categories','Panel\CategoryController@index')->name('panel.category.index');
    Route::get('categories/create','Panel\CategoryController@create')->name('panel.category.create');
    Route::post('categories/create','Panel\CategoryController@store')->name('panel.category.store');
    Route::post('categories/delete','Panel\CategoryController@delete')->name('panel.category.delete');
    Route::resource('products', 'Panel\ProductController');
    Route::resource('orders','Panel\OrderController');
    Route::get('catagories/edit/{id}', 'Panel\CategoryController@edit')->name('panel.catagory.edit');
    Route::post('categories/edit/{id}', 'Panel\CategoryController@update')->name('panel.category.update');
    Route::post('order/delivery','Panel\OrderController@delivery')->name('order.delivery');
    Route::post('order/cancel','Panel\OrderController@cancel')->name('order.cancel');

});
