<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\TagController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Experimental\RandomController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

#Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
#    return Inertia::render('Dashboard');
#})->name('dashboard');

/**
 * Dashboard Routes
 */
Route::middleware(['auth', 'web'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('dashboard.posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('dashboard.posts.create');
        Route::post('/', [PostController::class, 'store'])->name('dashboard.posts.store');
        Route::get('/{post}/edit', [TagController::class, 'edit'])->name('dashboard.posts.edit');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('dashboard.categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('dashboard.categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('dashboard.categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('dashboard.categories.edit');
        Route::put('/{category}/edit', [CategoryController::class, 'update'])->name('dashboard.categories.update');
        Route::delete('/{category}/edit', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');
    });

    Route::prefix('tags')->group(function () {
        Route::get('/', [TagController::class, 'index'])->name('dashboard.tags.index');
        Route::get('/create', [TagController::class, 'create'])->name('dashboard.tags.create');
        Route::post('/', [TagController::class, 'store'])->name('dashboard.tags.store');
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('dashboard.tags.edit');
        Route::put('/{tag}/edit', [TagController::class, 'update'])->name('dashboard.tags.update');
        Route::delete('/{tag}/edit', [TagController::class, 'destroy'])->name('dashboard.tags.destroy');
    });
});

/**
 * Experimental Routes
 */
Route::prefix('experimental')->group(function () {
    Route::get('/random', [RandomController::class, 'index'])->name('experimental.random');
    Route::get('/user', [RandomController::class, 'user'])->name('experimental.user');
});