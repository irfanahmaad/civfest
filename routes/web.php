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

Route::get('/', 'MainController@index');

Route::get('event/{name_event}', 'MainController@event');

Route::get('seminar/{name_seminar}', 'MainController@seminar');

Route::get('all-news', 'MainController@news');

Route::get('news/detail/{title_news}', 'MainController@newsDetail');

Route::get('ultramen', function(){
  return view('pages/ultramen');
});

Route::get('galeri/{type_galeri}', 'MainController@galleries');

Route::get('contact', function(){
    return view('pages/contact');
});

Route::get('about-us', function(){
  return view('pages/about');
});

Route::any('/order', 'MainController@pesan');
Route::any('/order/cek-status', 'MainController@cekStatus');
Route::any('/order/upload-bukti-pembayaran', 'MainController@upload');

Auth::routes();

Route::resource('news', 'NewsController', ['names' => [
    'index' => 'news',
    'create' => 'news',
    'edit' => 'news'
]]);

Route::resource('events', 'EventsController', ['names' => [
    'index' => 'events',
    'create' => 'events',
    'edit' => 'events'
]]);

Route::resource('seminars', 'SeminarsController', ['names' => [
    'index' => 'seminars',
    'create' => 'seminars',
    'edit' => 'seminars'
]]);

Route::resource('events/{get_id_event}/timelines', 'TimelinesController', ['names' => [
    'index' => 'events',
    'create' => 'events',
    'edit' => 'events'
]]);

Route::resource('seminars/{get_id_seminar}/speakers', 'SpeakersController', ['names' => [
    'index' => 'seminars',
    'create' => 'seminars',
    'edit' => 'seminars'
]]);

Route::resource('registrations', 'RegistrationsController', ['names' => [
    'index' => 'registrations'
]]);

Route::resource('galleries', 'GalleriesController', ['names' => [
    'index' => 'galleries',
    'create' => 'galleries',
    'edit' => 'galleries'
]]);


Route::resource('registrations', 'RegistrationsController', ['names' => [
  'index' => 'registrations'
]]);

Route::resource('medpart', 'MedpartController', ['names' => [
    'index' => 'medpart',
    'create' => 'medpart'
]]);

Route::resource('sponsors', 'SponsorsController', ['names' => [
    'index' => 'sponsors',
    'create' => 'sponsors'
]]);

Route::resource('alur-beton', 'AlurBetonController', ['names' => [
    'index' => 'alur-beton',
    'create' => 'alur-beton'
]]);

Route::resource('alur-jembatan', 'AlurJembatanController', ['names' => [
    'index' => 'alur-jembatan',
    'create' => 'alur-jembatan'
]]);

Route::resource('alur-maket', 'AlurMaketController', ['names' => [
    'index' => 'alur-maket',
    'create' => 'alur-maket'
]]);

Route::resource('alur-desain', 'AlurDesainController', ['names' => [
    'index' => 'alur-desain',
    'create' => 'alur-desain'
]]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
