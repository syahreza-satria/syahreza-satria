<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

// Route::middleware(['guest'])->group(function () {
//     Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//     Route::post('/login', [LoginController::class, 'login']);
// });
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


// Route::get('/', [AppController::class, 'index'])->name('index');

// Route::get('/about', [AppController::class, 'about'])->name('about');

// Route::get('/contact', [AppController::class, 'contact'])->name('contact');

// Route::get('/project', [AppController::class, 'project'])->name('project');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// // Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('dashboard.projects.index');
// // Route::get('/dashboard/projects/create', [ProjectController::class, 'create'])->name('dashboard.projects.create');
// // Route::post('/dashboard/projects/store', [ProjectController::class, 'store'])->name('dashboard.projects.store');
// // Route::get('/dashboard/projects/edit/{id}', [ProjectController::class, 'edit'])->name('dashboard.projects.edit');
// // Route::put('/dashboard/projects/{id}', [ProjectController::class, 'update'])->name('dashboard.projects.update');
// // Route::delete('/dashboard/projects/{id}', [ProjectController::class, 'destroy'])->name('dashboard.projects.destroy');

// // Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('dashboard.categories.index');
// // Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('dashboard.categories.create');
// // Route::post('/dashboard/categories/store', [CategoryController::class, 'store'])->name('dashboard.categories.store');
// // Route::get('/dashboard/categories/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard.categories.edit');
// // Route::put('/dashboard/categories/{id}', [CategoryController::class, 'update'])->name('dashboard.categories.update');
// // Route::delete('/dashboard/categories/{id}', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');

// Halaman utama
Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::get('/contact', [AppController::class, 'contact'])->name('contact');
Route::get('/project', [AppController::class, 'project'])->name('project');

// Authentication Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout (hanya bisa dilakukan jika sudah login)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Dashboard (hanya bisa diakses jika sudah login)
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Route CRUD untuk Projects dan Categories
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
});
