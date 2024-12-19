<?php

use App\Http\Controllers\{
    BlogController,
    BoardController,
    DashboardController,
    ProfileController,
    HomeController,
    TeamController
};
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/our-team', [HomeController::class, 'team']);
Route::get('/our-board-of-directors', [HomeController::class, 'board']);
Route::get('/important-information', [HomeController::class, 'important_information']);
Route::get('/media', [HomeController::class, 'media']);
Route::get('/Privacy-Policy', function () {
    return view('frontend.Privacy-Policy');
});
Route::get('/terms-of-service', function () {
    return view('frontend.terms-of-services');
});

Route::get('/disclaimer', function () {
    return view('frontend.disclaimer');
});

Route::get('/contact', function () {
    return view('frontend.contact-us');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes with Middleware
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Team Routes
    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/save', [TeamController::class, 'save'])->name('team.save');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('/team/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');

    // Board Routes
    Route::get('/board', [BoardController::class, 'index'])->name('board.index');
    Route::get('/board/create', [BoardController::class, 'create'])->name('board.create');
    Route::post('/board/save', [BoardController::class, 'save'])->name('board.save');
    Route::get('/board/edit/{id}', [BoardController::class, 'edit'])->name('board.edit');
    Route::post('/board/update/{id}', [BoardController::class, 'update'])->name('board.update');
    Route::get('/board/delete/{id}', [BoardController::class, 'delete'])->name('board.delete');
});

// Authentication Routes
require __DIR__ . '/auth.php';
