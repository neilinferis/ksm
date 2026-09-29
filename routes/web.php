<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
        Route::get('/index', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
    });

    // ENROLLMENT
    Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments.index');
    Route::get('/enrollments/create', [EnrollmentController::class, 'create'])->name('enrollments.create');
    Route::get('/enrollments/edit', [EnrollmentController::class, 'edit'])->name('enrollments.edit');
    Route::get('/enrollments/show', [EnrollmentController::class, 'show'])->name('enrollments.show');

    // GRADES
    Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
    Route::get('/grades/create', [GradeController::class, 'create'])->name('grades.create');
    Route::get('/grades/edit', [GradeController::class, 'edit'])->name('grades.edit');
    Route::get('/grades/show', [GradeController::class, 'show'])->name('grades.show');
    Route::get('/grades/delete', [GradeController::class, 'delete'])->name('grades.delete');
});
