<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoanTest extends TestCase
{

    public function testIndex()
    {
        $book1 = Book::create([
            
            'title'=> 'Libro',
            'author'=> 'Autor',
            'format'=>'EPUB'
        ]);
        $book1 = Book::create([
            
            'title'=> 'Libro',
            'author'=> 'Autor',
            'format'=>'EPUB'
        ]);
        
        $loan1 = Loan::create([
            'book_id'=>1,
            'borrowed_by'=>'Fulanito',
            'checkout_date' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(30)
        ]);

        $loan2 = Loan::create([
            'book_id'=>2,
            'borrowed_by'=>'Fulanita',
            'checkout_date' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(30)
        ]);

        
        $response = $this->get('/loans');

        
        $response->assertStatus(200);
        $response->assertViewIs('loans.index');

        
        $loans = $response->viewData('loans');
        
        $this->assertEquals($loan1->checkout_date->format('d/m/Y'), $loans[0]->checkout_date);
        $this->assertEquals(floor($loan1->checkout_date->diffInDays(Carbon::now())), $loans[0]->fromCheckoutToNow);
        $this->assertEquals($loan1->due_date->format('d/m/Y'), $loans[0]->due_date);
        $this->assertEquals(floor($loan1->due_date->diffInDays(Carbon::now())) * -1, $loans[0]->fromDueToNow);
    }

}
