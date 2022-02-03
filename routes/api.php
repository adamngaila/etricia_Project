<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:airlock')->get('/token_user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('/registration/', 'RegistrationController@store');
Route::get('/SaveParams',"API\PowerpackAPI@saveParams");
Route::post('/profile_user',"API\PowerpackAPI@ProfileShow");
Route::post('/pack_params',"API\PowerpackAPI@PackParametersView");
Route::get('/qrcode_user',"API\PowerpackAPI@ProfileShow");
Route::post('/add_user',"API\userAPI@AddUser");
Route::post('/login_user',"API\userAPI@login");
Route::middleware('auth:sanctum')->post('/logout_user', function (Request $request) {
    $request->user()->tokens()->delete();

    return response('Loggedout', 200);
});
