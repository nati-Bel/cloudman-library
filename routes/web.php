<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


Route::get('', fn() => to_route('books.index'))->name('login');
Route::controller(BookController::class)->group(function(){
    Route::get('/books','index')->name('books.index');
    
});

Route::controller(LoanController::class)->group(function(){
    Route::get('/loans','index')->name('loans.index');
    Route::get('/loans/create/{book}','create')->name('loans.create');
    Route::post('/loans','store')->name('loans.store');
    Route::delete('/loans/{loan}','destroy')->name('loans.destroy');

    
});
Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)
    ->only('create','store');
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');

