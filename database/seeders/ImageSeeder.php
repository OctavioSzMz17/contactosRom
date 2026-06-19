<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Seed imágenes polimórficas para Contacts.
     */
    public function run(): void
    {
        // Cada Contact recibe entre 1 y 2 imágenes
        Contact::all()->each(function (Contact $contact) {
            $contact->images()->saveMany(
                Image::factory()->count(fake()->numberBetween(1, 2))->make()
            );
        });
    }
}
