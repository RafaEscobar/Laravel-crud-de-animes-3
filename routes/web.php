<?php

use App\Http\Controllers\AnimesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('createPendingAnime/{dataId}', [DashboardController::class, 'createPendingAnime'])->name('addPending');
    Route::get('deletePendingAnime/{id}', [DashboardController::class, 'deletePendingAnime'])->name('deletePending');
    Route::get('/showProfile', [UserController::class, 'showProfile'])->name('user.profile');
    Route::resource('user', UserController::class);
    Route::resource('anime', AnimesController::class);
});

Route::get('test', function(){
    return view('nose');
});