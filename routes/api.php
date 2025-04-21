<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;


Route::get('/user/profile', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('kategori', [KategoriController::class, 'index']);
// Route::post('kategori', [KategoriController::class, 'store']);
// Route::get('kategori/{id}', [KategoriController::class, 'show']);
// Route::put('kategori/{id}', [KategoriController::class, 'update']);
// Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

// auth route
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('kategori', PostController::class)->except(['edit', 'create']);
    Route::resource('tag', ImageController::class)->except(['edit', 'create']);
    Route::resource('user', UserController::class)->except(['edit', 'create']);
    // Route::resource('berita', BeritaController::class)->except(['edit', 'create']);
// });

Route::get('/events', function () {
    return response()->json(['message' => 'Berhasil ambil data events']);
});

// events
Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);
Route::put('/events/{id}', [EventController::class, 'update']);

// sactum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
