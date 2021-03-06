<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');;


Route::get('/about',[App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/post',[App\Http\Controllers\PostController::class, 'post'])->name('post');

Route::get('/contact',[App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

