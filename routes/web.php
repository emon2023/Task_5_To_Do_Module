<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
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

Route::get('/',[ToDoController::class,'index'])->name('todo.index');
Route::post('/todo/create',[ToDoController::class,'create'])->name('todo.create');
Route::get('/todo/edit/{id}',[ToDoController::class,'edit'])->name('todo.edit');
Route::post('/todo/update/{id}',[ToDoController::class,'update'])->name('todo.update');
Route::get('/todo/delete/{id}',[ToDoController::class,'delete'])->name('todo.delete');
