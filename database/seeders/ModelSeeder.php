<?php

namespace Database\Seeders;

use App\Models\Model as DeviceModel;
use App\Models\ModelVersion;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 models, and for each model, create 3 versions
        DeviceModel::factory(10)
            ->has(ModelVersion::factory()->count(3), 'versions')
            ->create();
    }
}
