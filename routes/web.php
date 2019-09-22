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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/slider', 'SliderController');
Route::resource('admin/advantage', 'AdvantageController');
Route::resource('admin/about', 'AboutController');
Route::resource('admin/featurs', 'FeatureController');
Route::resource('admin/featureImage','FimageController');
Route::resource('admin/works','WorkController');
Route::resource('admin/worksImage','WorkImgController');
Route::resource('admin/achievements','AchievementController');
Route::resource('admin/testimonial','TestimonialController');
Route::resource('admin/partner','PartnerController');
Route::resource('admin/contact','ContactController');












