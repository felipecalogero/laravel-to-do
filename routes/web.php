<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/task/new', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('/task/delete', [TaskController::class, 'delete'])->name('tasks.delete');
Route::get('/task', [TaskController::class, 'index'])->name('tasks.view');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
