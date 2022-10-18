<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Car;

class CarTableSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            "user_id" => 1,
            "model" => 'Camaro',
            "license_plate" => 'AAA123',
            "value" => 53000
        ]);

        Car::create([
            "user_id" => 2,
            "model" => 'Fox',
            "license_plate" => 'BBB456',
            "value" => 9000
        ]);

        Car::create([
            "user_id" => 3,
            "model" => 'Palio',
            "license_plate" => 'CCC789',
            "value" => 6000
        ]);

    }
}
