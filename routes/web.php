<?php

use App\Http\Controllers\{ProfileController, HomeController, TeamController};
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/', function () {

// });

Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);

Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/save', [TeamController::class, 'save'])->name('team.save');
Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
Route::get('/team/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');





require __DIR__ . '/auth.php';
