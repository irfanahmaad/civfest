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

Route::get('/news', 'MainController@news');

Route::get('galeri/{type_galeri}', function($type_galeri){
  return view('pages/'.$type_galeri);
});

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


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');