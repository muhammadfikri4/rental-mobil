<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['auth' => 'App\Http\Controllers'], function () {
    Route::get('/login', [AuthController::class, 'AuthLoginView'])->name('login');
    Route::post('/login', [AuthController::class, 'AuthLoginCreation'])->name('login-creation');

    Route::get('/register', [AuthController::class, 'AuthRegisterView'])->name('register');
    Route::post('/register', [AuthController::class, 'AuthRegisterCreation'])->name('register-creation');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::group(['dashboard' => 'App\Http\Controllers'], function () {
    Route::get('/', [DashboardController::class, 'DashboardView'])->name('dashboard');
    Route::get('/add-car', [DashboardController::class, 'AddTransactionView'])->name('add-transaction-dashboard');

    Route::post('/car', [CarController::class, 'create'])->name('car-creation');
    Route::get('/edit-car/{id}', [DashboardController::class, 'EditTransactionView'])->name('car-edit');
    Route::put('/car/{id}', [CarController::class, 'edit'])->name('car-edit-creation');
});
