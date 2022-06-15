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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perpustakaan', [App\Http\Controllers\PerpustakaanController::class, 'index'])->name('perpustakaan');

Route::get('/perpustakaan/create', [App\Http\Controllers\PerpustakaanController::class, 'create']);
Route::post('/perpustakaan', [App\Http\Controllers\PerpustakaanController::class, 'store'])->name('perpustakaan');
Route::get('perpustakaan/search', [App\Http\Controllers\PerpustakaanController::class, 'search'])->name('search');

Route::get('perpustakaan/{id}/edit', [App\Http\Controllers\PerpustakaanController::class, 'edit']);
Route::get('perpustakaan/{id}/lihat', [App\Http\Controllers\PerpustakaanController::class, 'lihat']);

Route::patch('perpustakaan/{id}', [App\Http\Controllers\PerpustakaanController::class, 'update']);

Route::delete('perpustakaan/{id}', [App\Http\Controllers\PerpustakaanController::class, 'destroy'])->name('perpustakaan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');