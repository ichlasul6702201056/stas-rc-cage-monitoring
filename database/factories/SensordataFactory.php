<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sensordata>
 */
class SensordataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = FakerFactory::create(); // Add this line
        $date = $faker->dateTimeBetween('-30 day'); // Update this line
        return [
            'created_at' => $date,
            'humid_1' => $faker->randomFloat(2, 40, 100), // Update this line
            'humid_2' => $faker->randomFloat(2, 40, 100), // Update this line
            'humid_3' => $faker->randomFloat(2, 40, 100), // Update this line
            'temperature_1' => $faker->randomFloat(2, 40, 100), // Update this line
            'temperature_2' => $faker->randomFloat(2, 40, 100), // Update this line
            'temperature_3' => $faker->randomFloat(2, 40, 100), // Update this line
            'gas_1' => $faker->numberBetween(200, 800), // Update this line
            'gas_2' => $faker->numberBetween(200, 800), // Update this line
            'gas_3' => $faker->numberBetween(200, 800), // Update this line
            'gas_3' => $this->faker->numberBetween(200, 800),
        ];
    }
}
