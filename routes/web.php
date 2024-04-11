<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;



Route::controller(BookController::class)->group(function(){
    Route::get('/books','index')->name('books.index');
    
});

Route::controller(LoanController::class)->group(function(){
    Route::get('/loans/create/{book}','create')->name('loans.create');
    Route::get('/loans','index')->name('loans.index');
    Route::post('/loans','store')->name('loans.store');
    Route::delete('/loans/{loan}','destroy')->name('loans.destroy');

    
});

