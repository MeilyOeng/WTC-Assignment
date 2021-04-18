<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

Route::get('/', [homeController::class, 'index']);

Route::get('/index.html', 'App\Http\Controllers\homeController@index');

Route::get('/about.html', [homeController::class, 'about']);

Route::get('/property-grid.html', [homeController::class, 'propertyGrid']);

Route::get('/property-single.html', [homeController::class, 'propertySingle']);

Route::get('/blog-grid.html', [homeController::class, 'blogGrid']);

Route::get('/agents-grid.html', [homeController::class, 'agentGrid']);

Route::get('/blog-single.html', [homeController::class, 'blogSingle']);

Route::get('/agents-single.html', [homeController::class, 'agentSingle']);

Route::get('/contact.html', [homeController::class, 'contact']);




