<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;

// =====================
// ⏩ PUBLIC ROUTES
// =====================

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// Post routes
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

// Author routes
Route::get('/author/{id}', [AuthorController::class, 'show'])->name('author.show');
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');

// Image Gallery
Route::get('/image-gallery', [ImageController::class, 'index'])->name('image.gallery');
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');

// =====================
// 🔐 AUTH ROUTES
// =====================

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// =====================
// 👤 USER ROUTES
// =====================

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// =====================
// 🛡️ ADMIN ROUTES
// =====================

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/index', [AdminController::class, 'index'])->name('index');

    // Image management
    Route::get('/images', [AdminController::class, 'images'])->name('images');
    Route::get('/images/create', [AdminController::class, 'create'])->name('images.create');
    Route::post('/images', [AdminController::class, 'store'])->name('images.store');
});
