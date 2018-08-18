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

Route::group(['prefix' => 'app'], function () {
<<<<<<< HEAD
  Route::get('/index', function () {
      return view('app.index');
  });
});

Route::group(['prefix' => 'admin'], function () {

  // Admin sidebar
  Route::get('/boosters', 'BoosterController@index');
  Route::get('/boosters/group', 'BoosterGroupController@index');
  Route::get('/dashboard', function () {
      return view('admin.dashboard');
  });


  // Use to create league ranks
  // Route::get('/leagueranks/make', 'LeagueRankController@makeRanks');

  Route::post('/order', 'OrderController@store');

  // User routes
  Route::get('/users', 'UserController@index');
  Route::get('/user/create', 'UserController@create');
  Route::post('/user/store', 'UserController@store');
  Route::post('/user/delete/{user}', 'UserController@destroy');

=======
    Route::POST('calc/price', 'LeagueRankController@index');
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
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/boosts', function () {
        return view('admin.boosts');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
>>>>>>> 0466da0eb2cec84d09c26db1f56d0614471eace1
});



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
