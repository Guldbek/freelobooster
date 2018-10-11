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
// Route::get('/', function () {
//     return view('welcome');
// });

// Routes til home/price/boost/about
Route::group(['prefix' => 'app'], function () {
    Route::get('/', function () {
        return view('app.index');
    });
    Route::get('/calc', function () {
        return view('app.price');
    });
    Route::get('/boost', function () {
        return view('app.boost');
    });
    Route::get('/about', function () {
        return view('app.about');
    });
});

// Routes til login/register
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });

});

// Route til logout
Route::group(['prefix' => 'user', 'middleware' => ['auth']], function(){
  Route::get('/logout', function(){
     Auth::logout();
     return redirect()->home();
   });
});
// Routes til dashboard / boosts
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/boosts', function () {
        return view('admin.boosts');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
