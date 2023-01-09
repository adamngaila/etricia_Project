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

Route::group(['middleware'=>['auth','profile']],function(){
    Route::get('/profile', function () {
        return view('Profile.userprofile');
    });
});

Route::group(['middleware'=>['auth','admin_dashboard']],function(){
    Route::get('/admin_dashboard', function () {
        return view('admin.admin_dashboard');
    });
});



Route::group(['middleware' => ['auth','profile']], function () {
    //Admin
    Route::get('/admin_dashboard', 'Admin\TechnicalManager@@index')->name('admin_dashboard');
    Route::get('/super_etricia','Admin\TechnicalManager@EtriciaRetrieve' )->name('super_etricia');

    //Admin creating pack 
    Route::get('/add_etricia','SuperController@navigate_create_etricia') ->name('add_etricia');
    Route::get('/store_etricia', 'Admin\TechnicalManager@StoreEtricia')->name('store_etricia');

//monitor and controll
Route::any('/etricia_Monitor','PowerpackController@index')->name('etricia_Monitor');
Route::get('/voltcharts', 'PowerpackController@DrawCharts')->name('voltcharts');
Route::any('/etricia_Monitor/diagnosis','PowerpackController@diagnosis_results');
Route::any('/etricia_Monitor/control','PowerpackController@control_pack');

//bills
Route::any('/etricia_Bills', 'Bills\BillingController@index')->name('etricia_Bills');
Route::any('/etricia_Bills/show', 'Bills\BillingController@show');  
    });

//Orders
Route::any('/order_portal', 'Orders\OrderController@index');

//Downloads FileManagerController
Route::any('/DownloadApp', 'Files\FileManagerController@Download_App');
