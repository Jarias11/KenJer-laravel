<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

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
Route::get('/services', [ServicesController::class,'index'])->name('services');

// Gallery Page
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

//Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
