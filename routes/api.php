<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IdPermitController;
use App\Http\Controllers\PpeReqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ElisController;
use App\Http\Controllers\MedicalController;

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

Route::get('id_permit', [PpeReqController::class, 'index']);
Route::post('create_id_permit',[IdPermitController::class, 'create']);


Route::get('ppe_req', [PpeReqController::class, 'index']);
Route::post('approve_ppe_req',[PpeReqController::class, 'approve_ppe']);
Route::post('cancel_ppe_req', [PpeReqController::class, 'cancel_ppe']);
Route::post('upload_mcu', [MedicalController::class, 'uploadHasilMCU']);

Route::resource('elis_stats', ElisController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', LoginController::class);

/**
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\RegisterController::class)->name('register');

/**
 * @method "POST"
 */
Route::post('/logout', App\Http\Controllers\LogoutController::class)->name('register');