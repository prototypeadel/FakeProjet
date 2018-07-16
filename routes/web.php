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
Route::resource('/admin/services','ServiceController');
Route::resource('/admin/categories','CategorieController');
Route::resource('/admin/projets','ProjetController');
Route::resource('/admin/temoignages','TemoignageController');
Route::resource('/admin/tags','TagController');
Route::resource('/admin/users','UserController');
Route::resource('/admin/newsletters','NewsletterController');
Route::resource('/admin/clients','ClientController');
Route::resource('/admin/commentaires','CommentaireController');
Route::resource('/admin/roles','RoleController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
