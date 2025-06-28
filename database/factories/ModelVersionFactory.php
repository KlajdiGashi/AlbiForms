<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelVersion>
 */
class ModelVersionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_id' => Model::factory(),
            'version_number' => fake()->randomFloat(1, 1, 10),
            'changelog' => fake()->paragraph(),
            'release_date' => fake()->date(),
        ];
    }
}
