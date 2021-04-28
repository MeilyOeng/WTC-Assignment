<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\postController;
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
    return view('home');
});

Auth::routes();
Route::get('/post', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', [App\Http\Controllers\postController::class, 'index']);
Route::post('/posts', [App\Http\Controllers\postController::class, 'store']);
Route::get('/createPost', [App\Http\Controllers\postController::class, 'createPost']);
Route::get('/{post}/edit', [App\Http\Controllers\postController::class, 'edit']);

