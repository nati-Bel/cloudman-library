<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\Book;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{

    public function index()
    {
        $loans = Loan::orderBy('created_at', 'desc')->get();
        
        foreach ($loans as $loan){
            $loan->checkout_date = Carbon::parse($loan->checkout_date);
            $loan['fromCheckoutToNow']=floor($loan->checkout_date->diffInDays(Carbon::now()));
            $loan->checkout_date=$loan->checkout_date->format('d/m/Y');

            $loan->due_date = Carbon::parse($loan->due_date);
            $loan['fromDueToNow']=floor($loan->due_date->diffInDays(Carbon::now())) *-1;
            $loan->due_date=$loan->due_date->format('d/m/Y');
        }

        return view('loans.index', compact('loans'));
    }


    public function create(Book $book)
    {
        return view('loans.create', compact('book'));
    }


    public function store(LoanRequest $request)
    {
        $loan = $request->all();
        
        $checkoutDate = Carbon::parse($request->input('checkout_date'));
        $loan['due_date'] = $checkoutDate->addDays(30);

        Loan::create($loan);

        return redirect()->route('loans.index')->with('success', 'Libro prestado con éxito!');
        
    }
    
    public function destroy(Loan $loan)
    {
        $loan ->delete();
        return redirect()->route('loans.index')->with('success', 'Libro devuelto con éxito');
    }
}
