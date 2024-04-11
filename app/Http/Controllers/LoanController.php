<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    public function create(Book $book)
    {

        return view('loans.create', ['book' => $book]);
    }

    public function store(Request $request)
    {
        $loan = $request->all();
        $checkoutDate = Carbon::parse($request->input('checkout_date'));
        if ($checkoutDate->isValid()) {
            $loan['due_date'] = $checkoutDate->addDays(30);

        Loan::create($loan);
        return redirect()->route('books.index')->with('success', 'Libro prrestado con éxito!');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        $loan ->delete();
        return redirect()->route('loans.index')->with('success', 'Libro devuelto con éxito');
    }
}
