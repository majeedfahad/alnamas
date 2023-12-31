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


Route::middleware(['is_website_open', 'inform_voters'])->group(function() {
    Auth::routes();

    Route::middleware(['auth'])->group(function() {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('steps', StepsController::class)->only(['index', 'create', 'store']);
        Route::get('best-images/{image}/toggleLike', [BestImageController::class, 'toggleLike'])->name('best-images.toggleLike');
        Route::get('best-images/{image}/vote', [BestImageController::class, 'vote'])->name('best-images.vote');
        Route::get('best-images/{image}/unvote', [BestImageController::class, 'unvote'])->name('best-images.unvote');
        Route::resource('best-images', BestImageController::class)->only(['index', 'create', 'store', 'destroy']);

        Route::get('end', [HomeController::class, 'tripEnd'])->name('end');
        Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');

    });
});

Route::get('/not-yet', function() {
    if(config('app.is_website_open'))
        return redirect()->route('register');

    return view('website-closed');
})->name('website-closed');
