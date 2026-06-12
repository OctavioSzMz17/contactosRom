<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
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
        // 20 usuarios, cada uno con número de teléfono iniciando con 771
        User::factory(20)->create();

        Contact::factory(10)->create();

        // Seeder de imágenes polimórficas (debe ir DESPUÉS de users y contacts)
        $this->call(ImageSeeder::class);
    }
}
