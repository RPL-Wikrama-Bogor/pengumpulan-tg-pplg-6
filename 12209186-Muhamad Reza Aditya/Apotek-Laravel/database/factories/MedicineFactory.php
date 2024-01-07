<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => arr::random(['tablet', 'sirup', 'kapsul']),
            'name' => arr::random(['Paramex', 'Vitamin C', 'Panadhol', 'Vitamin A', 'Energen']),
            'price' => mt_rand(10000, 100000),
            'stock' => mt_rand(1, 100),
        ];
    }
}
    