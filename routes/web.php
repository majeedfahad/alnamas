<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BestImageController;
use App\Http\Controllers\StepsController;

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


Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('steps', StepsController::class)->only(['index', 'create', 'store']);

    Route::get('best-images/{image}/toggleLike', [BestImageController::class, 'toggleLike'])->name('best-images.toggleLike');
    Route::get('best-images/{image}/toggleVote', [BestImageController::class, 'toggleVote'])->name('best-images.toggleVote');
    Route::resource('best-images', BestImageController::class)->only(['index', 'create', 'store']);
});
