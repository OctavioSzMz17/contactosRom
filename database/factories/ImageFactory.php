<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $width  = $this->faker->numberBetween(200, 800);
        $height = $this->faker->numberBetween(200, 800);

        return [
            'url' => "https://picsum.photos/{$width}/{$height}?random=" . $this->faker->unique()->numberBetween(1, 9999),
            'alt' => $this->faker->sentence(3),
            // imageable_id e imageable_type se asignan al crear con el modelo relacionado
        ];
    }
}
