<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return view('admin.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/' , [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/blog-details', function () {
    return view('frontend.blog-details');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/faq', function () {
    return view('frontend.faq');
});
Route::get('/how-it-works', function () {
    return view('frontend.how-it-works');
});
Route::get('/legal', function () {
    return view('frontend.legal');
});
Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/terms', function () {
    return view('frontend.terms');
});
Route::get('/service-details', function () {
    return view('frontend.service-details');
});
