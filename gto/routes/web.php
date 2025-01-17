<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ParticipantController::class, 'index'])->name('welcome');
Route::get('/disciplines', [DisciplineController::class, 'index'])->name('disciplines');


// Маршрут для страницы входа
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Маршрут для обработки формы входа
// Route::post('/auth', [AuthController::class, 'login'])->name('login.submit');

// Маршрут для выхода из системы
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Маршрут для отображения формы регистрации
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Маршрут для обработки регистрации
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


