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
})->name('welcome');
Route::get('/services', function () {
    return view('services');
})->name('service');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/conact', function () {
    return view('contact');
})->name('contact');

Route::resource('/admin/caroussels','CarousselController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
