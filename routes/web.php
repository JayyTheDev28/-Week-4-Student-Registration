<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])
    ->name('home');

Route::get('/register', [StudentController::class, 'create'])
    ->name('students.create');

Route::post('/register', [StudentController::class, 'store'])
    ->name('students.store');

Route::get('/students/{student}', [StudentController::class, 'show'])
    ->name('students.show');