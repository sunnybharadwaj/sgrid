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
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
});

Route::get('/services', function() {
    return view('services');
});

Route::get('/projects', function() {
    return view('projects');
});

Route::get('/gallery', function() {
    return view('gallery');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/query', 'QueryController@store')->name('query.store');
Route::get('/querylist')->uses('QueryController@index');

Route::get('/careers', function() {
    return view('careers');
});



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
