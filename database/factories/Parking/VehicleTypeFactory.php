<?php

namespace Database\Factories\Parking;

use Illuminate\Database\Eloquent\Factories\Factory;

final class VehicleTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'internal_name' => $this->faker->name(),
            'active' => $this->faker->boolean(),
        ];
    }

}
