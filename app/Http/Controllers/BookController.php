<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        $filters = request()->only(
            'search');
        
        $books = Book::whereDoesntHave('loans')->filter($filters)->latest()->get();
        return view('books.index', compact('books'));
    }

}
