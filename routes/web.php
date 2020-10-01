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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-surveilance', function () {
    return view('Surveilance.register-surveilance');
});
Route::post('surveilance','Surveilance\DisplayController@store');
Route::get('/surveilance', 'Surveilance\DisplayController@listIP');

Route::get('/etricia', function () {
    return view('etricia.etricia');
});

Route::get('/map', function () {
    return view('gps.tracker');
});
Route::group(['middleware'=>['auth','profile']],function(){
    Route::get('/profile', function () {
        return view('Profile.userprofile');
    });
   // Route::get('/admin_dashboard', 'SuperController@index')->name('admin_dashboard');
   Route::get('/admin_dashboard', function () {
    return view('admin.admin_dashboard');
})->name('admin_dashboard');
});

//etricia
Route::get('/voltcharts', 'PowerpackController@DrawCharts')->name('voltcharts');

