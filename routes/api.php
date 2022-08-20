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
Route::get('/pack_diagnosis',"API\PackDriver@PackSystemDiagnosis");
Route::get('/pack_status',"API\PackDriver@StatusCheck");
Route::get('/switch_control',"API\PackDriver@PackUserControll");
Route::get('/admin_pack_control',"API\PackDriver@PackAdminControll");

Route::get('/pack_charge_control',"API\PackDriver@PackChargeControll");
Route::get('/Lock_control',"API\PackDriver@PackLockControll");
Route::post('/profile_user',"API\PowerpackAPI@ProfileShow");
Route::post('/pack_params',"API\PowerpackAPI@PackParametersView");
Route::any('/qrcode_user',"API\PowerpackAPI@ProfileShow");
Route::post('/add_user',"API\userAPI@AddUser");
Route::post('/login_user',"API\userAPI@login");
Route::middleware('auth:sanctum')->post('/logout_user', function (Request $request) {
    $request->user()->tokens()->delete();

    return response('Loggedout', 200);
});
Route::post('/notificatins',"API\PowerpackAPI@fetch_notification");
Route::post('/fetch_bills',"API\PowerpackAPI@fetch_bill");
Route::post('/fetch_monitoring',"API\PowerpackAPI@fetch_monitoring");
Route::post('/send_comand',"API\PowerpackAPI@Send_Commands");
Route::post('/fetch_invoice',"API\PowerpackAPI@fetch_invoice");
