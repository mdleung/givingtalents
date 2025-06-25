<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalentSubmissionController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [TalentSubmissionController::class, 'index'])->name('talent-submissions.index');
Route::post('/submit-talent', [TalentSubmissionController::class, 'store'])->name('talent-submissions.store');
Route::delete('/talent-submission/{id}', [TalentSubmissionController::class, 'destroy'])->name('talent-submissions.destroy');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/submission/{id}', [AdminController::class, 'show'])->name('show');
    Route::delete('/submission/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::post('/submission/{id}/restore', [AdminController::class, 'restore'])->name('restore');
});
