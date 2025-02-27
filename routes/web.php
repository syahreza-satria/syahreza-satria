<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [AppController::class, 'index'])->name('index');

Route::get('/about', [AppController::class, 'about'])->name('about');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');

Route::get('/project', [AppController::class, 'project'])->name('project');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('dashboard.projects.index');
Route::get('/dashboard/projects/create', [ProjectController::class, 'create'])->name('dashboard.projects.create');
Route::post('/dashboard/projects/store', [ProjectController::class, 'store'])->name('dashboard.projects.store');
Route::get('/dashboard/projects/edit/{id}', [ProjectController::class, 'edit'])->name('dashboard.projects.edit');
Route::put('/dashboard/projects/{id}', [ProjectController::class, 'update'])->name('dashboard.projects.update');
Route::delete('/dashboard/projects/{id}', [ProjectController::class, 'destroy'])->name('dashboard.projects.destroy');
