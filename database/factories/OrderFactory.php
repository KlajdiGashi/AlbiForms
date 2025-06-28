<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Model as DeviceModel;
use App\Models\ModelVersion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'client_id' => Client::inRandomOrder()->first()->id,
            'model_id' => DeviceModel::inRandomOrder()->first()->id,
            'model_version_id' => ModelVersion::inRandomOrder()->first()->id,
            'total_palets' => fake()->numberBetween(1, 20),
            'meta' => null,
            'pack' => fake()->randomElement(['SINGLE', 'BULK']),
            'priority' => fake()->randomElement(['LOW', 'MEDIUM', 'HIGH']),
            'voip' => fake()->randomElement(['UNDEFINED', 'SIP', 'MGCP']),
            'tags' => fake()->words(3, true),
            'deadline_date' => fake()->dateTimeBetween('+1 week', '+2 months'),
            'client_address' => fake()->address(),
            'firmware' => 'v' . fake()->randomFloat(2, 1, 5),
            'quantity' => fake()->numberBetween(50, 500),
            'freight' => fake()->randomElement(['Air', 'Sea', 'Land']),
            'height_palet' => fake()->randomElement(['1.2m', '1.5m', '1.8m']),
            'type_of_glue' => fake()->randomElement(['Hot Melt', 'Cold Glue']),
            'lan_cable' => fake()->randomElement(['Included', 'Not Included']),
            'power_supply' => fake()->randomElement(['Type A', 'Type B', 'Type C']),
            'hdmi' => fake()->boolean(),
            'remote_control' => fake()->boolean(),
            'logo_removal' => fake()->boolean(),
            'comment' => fake()->sentence(),
            'status' => fake()->randomElement(['PENDING', 'PROCESSING', 'COMPLETED', 'SHIPPED']),
            'type' => fake()->randomElement(['REFURBISHED', 'DAMAGED']),
            'lan_cost' => fake()->randomFloat(2, 1, 5),
            'psu_cost' => fake()->randomFloat(2, 5, 15),
            'refurbishment_cost' => fake()->randomFloat(2, 20, 100),
            'transport_customer_cost' => fake()->randomFloat(2, 50, 200),
            'transport_outgoing_cost' => fake()->randomFloat(2, 50, 200),
        ];
    }
}
