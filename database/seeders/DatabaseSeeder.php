<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([
            'name'=>'Nati',
            'email'=>'nati@belzi.com'
        ]);

        
        
        $titles=[
            "Mi Vida: La Autobiografía de Nelson Mandela",
            "Economía Sostenible: Modelos y Prácticas",
            "La Biografía de Albert Einstein",
            "Crisis Financiera y Recuperación Económica",
            "Mi Lucha: La Autobiografía de Mahatma Gandhi",
            "Economía Global: Desafíos y Oportunidades",
            "Biografía de Marie Curie: Pionera en la Ciencia",
            "Las Aventuras de Peter Pan",
            "El Libro de la Selva",
            "Alicia en el País de las Maravillas",
            "Charlie y la Fábrica de Chocolate",
            "Matilda",
            "Winnie the Pooh",
            "El Grúfalo",
            "El Gato con Botas",
            "Nómadas del Desierto: Relatos del Sahara",
            "Mujeres Pioneras en África: Luchas y Logros",
            "Cien Años de Soledad en el Desierto del Sáhara",
            "Cuentos d'Asturies",
            "Los Ritos del Agua: Un Estudio Antropológico",
            "La Construcción Social de la Realidad",
        ];


        foreach ($titles as $title)  {
            Book::factory()->create([
                                'title' => $title]);
        }

        Review::factory(200)->create();

        Loan::factory(30)->create();

    }
}
