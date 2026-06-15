<?php

namespace Database\Factories;

use App\Models\kost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<kost>
 */
class KostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kost' => fake()->company(),
            'pemilik' => fake()->name(),
            'alamat' => fake()->address(),
            'harga_per_bulan' => fake()->numberBetween(500000, 3000000),
            'jumlah_kamar' => fake()->numberBetween(5, 30),
            'status' => fake()->randomElement([
                'Kosong',
                'Penuh'
            ]),
        ];
    }
}
