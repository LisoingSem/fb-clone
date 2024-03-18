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

Route::get('/switch-lang/{lang}', [App\Http\Controllers\LanguageController::class, 'Index'])->name('switch-lang');
Route::middleware(['locale'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course');

    Route::fallback([App\Http\Controllers\Controller::class, 'notFound']);
});
