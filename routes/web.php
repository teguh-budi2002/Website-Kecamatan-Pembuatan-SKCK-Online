<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SKCKController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SKCKController::class, 'index']);
Route::get('/visi-misi', [SKCKController::class, 'visiMisi']);

Route::get('login', [LoginController::class, 'index']);
Route::post('login/process', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::post('skck/process', [SKCKController::class, 'skck_submit']);

Route::middleware('is_admin')->prefix('dashboard')->group(function() {
  Route::get('/', [DashboardController::class, 'index']);
  Route::get('/generate-signature', [DashboardController::class, 'generateSignature']);
  Route::get('/list-skck', [DashboardController::class, 'getListSkck']);
  Route::get('/list-skck/validation-skck/{number_police}', [DashboardController::class, 'validationSkck']);
  Route::post('/validation-skck/process', [SKCKController::class, 'skck_validation']);
});
