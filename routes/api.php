<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ReportController;

// User API routes
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']); // Get all users
    Route::get('{id}', [UserController::class, 'show']); // Get a specific user
    Route::post('/', [UserController::class, 'store']); // Create a new user
    Route::put('{id}', [UserController::class, 'update']); // Update a specific user
    Route::delete('{id}', [UserController::class, 'destroy']); // Delete a specific user
});

// Report API routes
Route::prefix('reports')->group(function () {
    Route::get('/', [ReportController::class, 'index']); // Get all reports
    Route::get('{id}', [ReportController::class, 'show']); // Get a specific report
    Route::post('/', [ReportController::class, 'store']); // Create a new report
    Route::put('{id}', [ReportController::class, 'update']); // Update a specific report
    Route::delete('{id}', [ReportController::class, 'destroy']); // Delete a specific report
});
