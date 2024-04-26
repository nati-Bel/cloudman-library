<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowedBook>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkoutDate = fake()->dateTimeBetween('-2 months', 'now');
        $dueDate = Carbon::instance($checkoutDate)->addDays(30);
        $book = Book::all()->random();
        $user = User::all()->random();
        
        return [
            'user_id'=> $user->id,
            'book_id'=>$book->id,
            'borrowed_by'=>fake()->name(),
            'checkout_date'=>$checkoutDate,
            'due_date'=>$dueDate,
        ];
    }
}
