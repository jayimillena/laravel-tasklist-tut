<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('task/{id}', [TaskController::class, 'show'])->name('tasks.show');
