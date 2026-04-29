<?php

namespace Database\Factories;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => Service::inRandomOrder()->first()->id,
            'title' => fake()->sentence(6, true),
            'description' => fake()->realText(150),
            'image_before' => 'https://picsum.photos/seed/'.fake()->numberBetween(1, 100).'/800/600',
            'image_after' => 'https://picsum.photos/seed/'.fake()->numberBetween(101, 200).'/800/600',
            'location' => fake()->randomElement([
                'Solo, Jawa Tengah',
                'Surakarta, Jawa Tengah',
                'Sukoharjo, Jawa Tengah',
                'Klaten, Jawa Tengah',
                'Karanganyar, Jawa Tengah',
                'Boyolali, Jawa Tengah',
            ]),
            'is_active' => true,
        ];
    }
}
