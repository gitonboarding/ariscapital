<?php

use App\Http\Controllers\{
    BlogController,
    BoardController,
    DashboardController,
    ProfileController,
    HomeController,
    InfoController,
    TeamController
};
use Illuminate\Support\Facades\Route;

// Frontend Routes
// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [HomeController::class, 'Home']);
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
Route::post('/contact-us/submit', [HomeController::class, 'contact_us'])->name('contact.submit');



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

    // location controller
    Route::get('/location', [InfoController::class, 'location_index'])->name('location.index');
    Route::get('/location/create', [InfoController::class, 'location_create'])->name('location.create');
    Route::post('/location/save', [InfoController::class, 'location_save'])->name('location.save');
    Route::get('/location/edit/{id}', [InfoController::class, 'location_edit'])->name('location.edit');
    Route::post('/location/update/{id}', [InfoController::class, 'location_update'])->name('location.update');
    Route::get('/location/delete/{id}', [InfoController::class, 'location_delete'])->name('location.delete');

    // media route
    Route::get('/media', [InfoController::class, 'media_index'])->name('media.index');
    Route::get('/media/create', [InfoController::class,'media_create'])->name('media.create');
    Route::post('/media/save', [InfoController::class,'media_save'])->name('media.save');
    Route::get('/media/edit/{id}', [InfoController::class,'media_edit'])->name('media.edit');
    Route::post('/media/update/{id}', [InfoController::class,'media_update'])->name('media.update');
    Route::get('/media/delete/{id}', [InfoController::class,'media_delete'])->name('media.delete');

    // Important Information
    Route::get('/important-information', [InfoController::class, 'important_information_index'])->name('important-information.index');
    Route::get('/important-information/create', [InfoController::class, 'important_information_create'])->name('important-information.create');
    Route::post('/important-information/save', [InfoController::class, 'important_information_save'])->name('important-information.save');
    Route::get('/important-information/edit/{id}', [InfoController::class, 'important_information_edit'])->name('important-information.edit');
    Route::post('/important-information/update/{id}', [InfoController::class, 'important_information_update'])->name('important-information.update');
    Route::get('/important-information/delete/{id}', [InfoController::class, 'important_information_delete'])->name('important-information.delete');


});

// Authentication Routes
require __DIR__ . '/auth.php';
