<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::post("/task", [TaskController::class, 'store']);
Route::get("/{id}/complete", [TaskController::class, 'complete']);
Route::get("/{id}/delete", [TaskController::class, 'destroy']);
