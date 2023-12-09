<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index'])->name('index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create')->name('create_view');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store')->name('create_task');

// edit

// update


// delete
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('destroy_task');

// reorder


