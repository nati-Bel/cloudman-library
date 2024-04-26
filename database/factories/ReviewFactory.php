<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        $book = Book::all()->random();

        return [
            'user_id'=> $user->id,
            'book_id'=>$book->id,
            'review'=> fake()->paragraph,
            'rating'=> fake()->numberBetween(1,5),
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'updated_at' => function (array $attributes) {
                return fake()->dateTimeBetween($attributes['created_at'],
            );}
            
        ];
    }

    public function average()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => fake()->numberBetween(2,5)
            ];
        });
    }

    public function good()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => fake()->numberBetween(4,5)
            ];
        });
    }
    public function bad()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => fake()->numberBetween(1,3)
            ];
        });
    }
}
