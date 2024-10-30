<?php

use App\Http\Controllers\{BlogController, BoardController, DashboardController, ProfileController, HomeController, TeamController};
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    // return view('backend.dashboard.index');
    return redirect()->route('admin.dashboard'); 
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




Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

// Route for Teams
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/save', [TeamController::class, 'save'])->name('team.save');
Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
Route::get('/team/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');


// Route for Board
Route::get('/board', [BoardController::class, 'index'])->name('board.index');
Route::get('/board/create', [BoardController::class, 'create'])->name('board.create');
Route::post('/board/save', [BoardController::class, 'save'])->name('board.save');
Route::get('/board/edit/{id}', [BoardController::class, 'edit'])->name('board.edit');
Route::post('/board/update/{id}', [BoardController::class, 'update'])->name('board.update');
Route::get('/board/delete/{id}', [BoardController::class, 'delete'])->name('board.delete');
Route::get('/board/duplicate/{id}', [BoardController::class, 'duplicate'])->name('board.duplicate');


// Route for Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/save', [BlogController::class, 'save'])->name('blog.save');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');


require __DIR__ . '/auth.php';
