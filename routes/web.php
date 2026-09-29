<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
