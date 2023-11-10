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
    return view('welcome');
});

Route::get(
    '/todos',
    [\App\Http\Controllers\TodosController::class, 'index']
)->name('todos.index');

Route::get(
    '/todos/create',
    [\App\Http\Controllers\TodosController::class, 'create']
)->name('todos.create');

Route::post(
    '/todos',
    [\App\Http\Controllers\TodosController::class, 'store']
)->name('todos.store');

Route::get(
    '/todos/{todos}',
    [\App\Http\Controllers\TodosController::class, 'show']
)->name('todos.show');

Route::get(
    '/todos/{todos}/edit',
    [\App\Http\Controllers\TodosController::class, 'edit']
)->name('todos.edit');

Route::patch(
    '/todos/{todos}',
    [\App\Http\Controllers\TodosController::class, 'update']
)->name('todos.update');

Route::delete(
    '/todos/{todos}',
    [\App\Http\Controllers\TodosController::class, 'destroy']
)->name('todos.destroy');
