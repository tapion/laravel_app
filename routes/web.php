<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
});
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
