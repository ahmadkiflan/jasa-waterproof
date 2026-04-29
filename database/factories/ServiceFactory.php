<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $services = [
        //     ['name' => 'Waterproof Coating', 'icon' => '🏠'],
        //     ['name' => 'Waterproof Membran Bakar', 'icon' => '🚿'],
        //     ['name' => 'Injeksi Beton', 'icon' => '🏊'],
        //     ['name' => 'Coring Beton', 'icon' => '🏗️'],
        // ];

        // $service = fake()->randomElement($services);

        // return [
        //     'name' => $service['name'],
        //     'description' => fake()->realText(150),
        //     'price' => null,
        //     'is_active' => true,
        //     'order' => fake()->numberBetween(1, 10),
        // ];
    }
}
