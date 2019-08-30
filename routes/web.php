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

/* Route::get('/', function () {
    return view('welcome');
}); */
//Ejemplo
Route::get('foto/{numero?}', function ($numero = 'sin numero') {
    return ' foto con numero: '.$numero;
})->where('numero', '[0-9]+');

//BACK
Auth::routes([
    'register' => false,
    'verify' => true,
    'reset' => true
  ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('imgSliders', 'img_sliderController');

Route::resource('movieCategories', 'movie_categoryController');

Route::resource('movies', 'movieController');

Route::resource('configurations', 'configurationController');

//FRONT
Route::get('/','FrontController@index')->name('index');

Route::post('/','FrontController@contact')->name('contact');

Route::get('/smovie/{id}','FrontController@showMovie')->name('smovie');

Route::get('/pmovies','FrontController@listMovies')->name('pmovies');



