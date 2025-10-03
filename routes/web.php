<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\flyController;
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth'])->group(function () {
   Route::resource('flies', App\Http\Controllers\flyController::class);
});

Route::resource('users', App\Http\Controllers\userController::class)->only([
    'create', 'store'
]);

Route::middleware(['auth'])->group(function () {
    Route::get('users', [userController::class, 'index'])->name('users.index');
    Route::get('users/{user}/edit', [userController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [userController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [userController::class, 'destroy'])->name('users.destroy');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});