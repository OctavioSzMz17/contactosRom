<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 20 contactos con datos de prueba
        Contact::factory(20)->create();

        // Seeder de imágenes polimórficas (debe ir DESPUÉS de contacts)
        $this->call(ImageSeeder::class);
    }
}
