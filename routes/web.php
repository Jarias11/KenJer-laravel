<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services Page
Route::get('/services', [ServicesController::class, 'index'])->name('services');

// Gallery Page
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Process the Quote Request Form submission from the Contact Page
Route::post('/contact/submit-quote', [ContactController::class, 'submitQuoteRequest'])->name('contact.submitQuote');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'can:admin')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Gallery routes
    //Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::post('/upload-image', [GalleryController::class, 'uploadImage'])->name('image.upload');
    Route::post('/tags', [GalleryController::class, 'storeTag'])->name('tags.store');

});

require __DIR__.'/auth.php';
