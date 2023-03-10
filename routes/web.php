<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdPermitController;
use App\Http\Controllers\PpeReqController;
use App\Http\Controllers\LoginController;

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

Route::resource('id_permit', IdPermitController::class);
Route::resource('ppe_req', PpeReqController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', LoginController::class);