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
    $query_id = Auth::user()->id;
      $result = \DB::table('powerpack_packages')
                        ->join('powerpack_parameters','powerpack_packages.packagecode','=','powerpack_parameters.packagecode')
                        ->join('etricia_directories','powerpack_packages.packagecode','=','etricia_directories.packagecode')
                        ->select('powerpack_packages.*','powerpack_parameters.*','etricia_directories.*')
                        ->where('user_id',$query_id)->first();
                        //return dd($result);
   //return view('etricia.etricia')->with("result",$result);
                                            //return dd($result);
    if($result != null){
   return view('etricia.etricia')->with("result",$result);
}else{
     return dd($result);
}
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


//Admin

Route::get('/add_etricia', function () {
    
    return view('admin.products.etricia.create');
})->name('add_etricia');
Route::get('/store_etricia', 'SuperController@StoreEtricia')->name('store_etricia');
//Route::post('/super_etricia', 'SuperController@EtriciaRetrieve')->name('super_etricia');

Route::get('/super_etricia', function (){

    $EtriciaProduct = \DB::table('etricia_directories')->get();
     
    return view('admin.products.etricia.index',['EtriciaProduct'=>$EtriciaProduct]);
 
})->name('super_etricia');

