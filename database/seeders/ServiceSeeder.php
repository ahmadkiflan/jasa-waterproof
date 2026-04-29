<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Waterproof Coating',
                'color' => 'teal',
                'description' => 'Solusi anti bocor untuk atap rumah dan gedung agar terhindar dari rembesan air hujan.',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'name' => 'Waterproof Membran Bakar',
                'color' => 'fuchsia',
                'description' => 'Mencegah rembesan air dari kamar mandi ke ruangan lain di bawahnya.',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'name' => 'Injeksi Beton',
                'color' => 'rose',
                'description' => 'Melapisi kolam renang agar air tidak merembes dan kolam tetap terisi penuh.',
                'is_active' => true,
                'order' => 3,
            ],
            [
                'name' => 'Coring Beton',
                'color' => 'orange',
                'description' => 'Mengatasi dinding lembab dan berjamur akibat rembesan air dari luar.',
                'is_active' => true,
                'order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
