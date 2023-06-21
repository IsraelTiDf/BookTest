<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
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
})->name('welcome');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//old
Route::resource('book', BookController::class)->middleware(['auth', 'verified']);

//new api
// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::prefix('api')->group(function () {
//         Route::get('/books', [BookController::class, 'index'])->name('books.index');
//         Route::post('/books', [BookController::class, 'store'])->name('books.store');
//         Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
//         Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
//         Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
//     });
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
