<?php

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
    return redirect()->to(route('students.index'));
});

Route::get('login', [\App\Http\Controllers\LoginController::class, 'form'])
    ->middleware('guest')
    ->name('auth.login.form');

Route::post('login', [\App\Http\Controllers\LoginController::class, 'attempt'])
    ->middleware('guest')
    ->name('auth.login');

Route::middleware('auth')->group(function() {
    Route::get('logout', [\App\Http\Controllers\LogoutController::class, 'logout'])
        ->name('auth.logout');
    Route::get('students/enroll', [\App\Http\Controllers\StudentEnrollController::class, 'index'])
        ->name('students.enroll.index');
    Route::post('students/enroll', [\App\Http\Controllers\StudentEnrollController::class, 'enroll'])
        ->name('students.enroll');
    Route::get('report/students/grade', [\App\Http\Controllers\StudentReportController::class, 'grade'])
        ->name('report.students.grade');
    Route::get('report/students/segment', [\App\Http\Controllers\StudentReportController::class, 'segment'])
        ->name('report.students.segment');
    Route::get('report/siblings', [\App\Http\Controllers\SiblingReportController::class, 'index'])
        ->name('report.siblings');
    Route::get('report/students/classes', [\App\Http\Controllers\StudentReportController::class, 'schollClass'])
        ->name('report.students.classes');
    Route::resource('students', \App\Http\Controllers\StudentController::class);
    Route::resource('classes', \App\Http\Controllers\SchoolClassController::class);
});
