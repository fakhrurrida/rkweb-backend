<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IdPermitController;
use App\Http\Controllers\PpeReqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ElisController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('id_permit', IdPermitController::class);

Route::resource('ppe_req', PpeReqController::class);

Route::resource('elis_stats', ElisController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', LoginController::class);

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\RegisterController::class)->name('register');

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/logout', App\Http\Controllers\LogoutController::class)->name('register');
