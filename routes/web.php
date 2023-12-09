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

Route::get('/task/create', function() {
    return view('tasks.create');
})->name('tasks_create_view');

// create
Route::post('/tasks', [TaskController::class, 'store'])->name('create_task');

// update
Route::resource('tasks', TaskController::class)->only(['update']);

// delete
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('destroy_task');
