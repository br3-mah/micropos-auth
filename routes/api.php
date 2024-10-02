<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\APIs\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/send-otp', [AuthController::class, 'sendOtp']);
Route::post('/resave_accsend-otp', [AuthController::class, 'reSendOtp']);

Route::post('/verify-otp', [AuthController::class, 'verify'])->name('verify-otp');
Route::post('/select-account-type', [AuthController::class, 'acc_type'])->name('account-type');
Route::post('/save-account-details', [AuthController::class, 'save_acc'])->name('save_acc');

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/contact-us', [ContactUsController::class, 'store']);
