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

Route::group(['prefix' => 'app'], function () {
  Route::get('/index', function () {
      return view('app.index');
  });
});

Route::group(['prefix' => 'admin'], function () {

  // Admin sidebar
  Route::get('/boosters', 'BoosterController@index');
  Route::get('/dashboard', function () {
      return view('admin.dashboard');
  });



  // User routes
  Route::get('/users', 'UserController@index');
  Route::get('/user/create', 'UserController@create');
  Route::post('/user/store', 'UserController@store');
  Route::post('/user/delete/{user}', 'UserController@destroy');

});


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
