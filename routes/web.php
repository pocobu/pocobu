<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', DashboardController::class)->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', DashboardController::class)->name('index');
        Route::resource('users', AdminUserController::class);
    });
});
