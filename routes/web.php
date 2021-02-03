<?php

use App\Http\Controllers\Frontend\indexController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/post', [indexController::class, 'singlePost'])->name('singlePost');

//User Registration route

Route::get('/user/registration', [indexController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/user/registration', [indexController::class, 'userRegistration'])->name('userRegistration');
