<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Seed imágenes polimórficas para Users y Contacts.
     */
    public function run(): void
    {
        // Cada User recibe 1 imagen
        User::all()->each(function (User $user) {
            $user->images()->saveMany(
                Image::factory()->count(1)->make()
            );
        });

        // Cada Contact recibe entre 1 y 2 imágenes (desactivado por ahora)
        // Contact::all()->each(function (Contact $contact) {
        //     $contact->images()->saveMany(
        //         Image::factory()->count(fake()->numberBetween(1, 2))->make()
        //     );
        // });
    }
}
