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
    Route::POST('/price', function () {
        $tier = $_POST['tier'];
        $division = $_POST['division'];
        $lp = $_POST['lp'];
        $region = $_POST['region'];
        $d_tier = $_POST['d_tier'];
        $d_division = $_POST['d_division'];
        if(isset($_POST['EP'])){
        $ep = $_POST['EP'];
        }
        if(isset($_POST['SC'])){
        $sc = $_POST['SC'];
        }
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
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
