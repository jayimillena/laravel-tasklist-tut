<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/update/{task}', [TaskController::class, 'update'])->name('task.update');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

