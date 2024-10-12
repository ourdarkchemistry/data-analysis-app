<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('data')->name('data.')->group(function () {
    Route::get('/', [DataController::class, 'index'])->name('index');
    Route::get('/import', [DataController::class, 'importForm'])->name('import.form');
    Route::post('/import', [DataController::class, 'import'])->name('import');
    Route::get('/{dataRecord}', [DataController::class, 'show'])->name('show');
});

Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/', [ReportController::class, 'index'])->name('index');
    Route::post('/generate', [ReportController::class, 'generate'])->name('generate');
});
