<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/faq', function () {
    return view('front.faq');
});

Route::get('/team', function () {
    return view('front.team');
});

Route::get('/privacy', function () {
    return view('front.privacy');
});

Route::middleware(['auth','admin'])->prefix('/admins')->name('admin.')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::post('/add-user',[AdminController::class,'add_user'])->name('add-user');
    Route::post('/add-tournament',[AdminController::class,'add_tournament'])->name('add-tournament');
    Route::get('/tournament',[AdminController::class,'tournament'])->name('tournament');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
