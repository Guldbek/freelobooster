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
  Route::POST('calc/price', 'LeagueRankController@index');
  Route::get('/index', function () {
      return view('app.index');
  });

  Route::get('/calc', function(){
    return view('app.price');
  });

});


Route::group(['prefix' => 'admin'], function () {
  Route::get('/boosts', function () {
      return view('admin.boosts');
  });

  Route::get('/dashboard', function () {
      return view('admin.dashboard');
  });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
