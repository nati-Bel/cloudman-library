<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author'=>fake()->name(),
            'format'=>fake()->randomElement(Book::$formats),
            'cover_url' => fake()->randomElement(['1.jpg','2.jpg', '3.jpg', '4.jpg']) 
        ];
    }
}
