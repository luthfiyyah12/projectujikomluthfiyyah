<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('post');
});

use App\Http\Controllers\ImageController;

Route::get('/', [ImageController::class, 'index']);
Route::post('/upload', [ImageController::class, 'store']);

use App\Http\Controllers\PostController;
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts', [PostController::class, 'index']);

// routes/web.php
Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/images', [AdminController::class, 'images'])->name('admin.images');
    Route::get('/admin/images/create', [AdminController::class, 'create'])->name('admin.images.create');
    Route::post('/admin/images', [AdminController::class, 'store'])->name('admin.images.store');
});

use App\Http\Controllers\AuthController;

// Sign In route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Sign Up route
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

