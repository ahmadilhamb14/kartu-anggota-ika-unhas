<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;

// TESTING AJALAH
Route::get(
    'sidebar',
    function () {
        return view('page.edit-profile');
    }
);
// TESTING AJALAH


Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth'])->name('login');
Route::get('/register', [LoginController::class, 'registration'])->name('register');
Route::post('/register', [LoginController::class, 'addMember'])->name('register');

Route::get('testing', [TestingController::class, 'getBelong']);
Route::post('testingdata', [TestingController::class, 'testingdata'])->name('testingdata');


Route::middleware('loginMiddleware')->group(function () {
    Route::get('/dashboard', [MemberController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/edit-profile', [MemberController::class, 'editProfile'])->name('edit-profile');
    Route::get('/dashboard/kelola-admin', [MemberController::class, 'kelolaAdmin'])->name('kelola-admin');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
