<?php

use App\Http\Controllers\Frontend\indexController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/post', [indexController::class, 'singlePost'])->name('singlePost');

//User Login Registration route

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/login', [indexController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [indexController::class, 'userLogin'])->name('userLogin');
    Route::get('/logout', [indexController::class, 'userlogout'])->name('logout');
    Route::get('/registration', [indexController::class, 'showRegistrationForm'])->name('showRegistrationForm');
    Route::post('/registration', [indexController::class, 'userRegistration'])->name('userRegistration');
});
