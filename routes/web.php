<?php


use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BookController::class,'index'])->name('books.index');
Route::get('/{id}/show',[BookController::class,'show'])->name('books.show');
Route::get('books/create', [BookController::class,'create']) -> name('books.create');
Route::post('books/store',[BookController::class,'store'])->name('books.store');
Route::get('books/{id}/edit',[BookController::class, 'edit'])->name('books.edit');


Route:: post('books/update', [BookController::class,'update'])->name('books.update');
Route::delete('books/delete', [BookController::class,'destroy'])->name('books.delete');




