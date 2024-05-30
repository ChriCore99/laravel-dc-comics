<?php

use App\Http\Controllers\ComicsController;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('/',['App\Http\Controllers\ComicsController', 'index']);

// Route::get('/comics/index',[ComicsController::class, 'index'])->name('comics.index');

// Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');

// Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show');
Route::resource('comics',ComicsController::class);