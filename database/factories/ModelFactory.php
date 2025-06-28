<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'DeviceModel ' . fake()->bothify('??-####'),
            'manufacturer' => fake()->randomElement(['TechCorp', 'InnovateInc', 'Gadgetron']),
            'description' => fake()->sentence(),
        ];
    }
}
