<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CheckIn>
 */
class CheckInFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'card_id' => $this->faker->numberBetween(1, 100),
            'check_type' => $this->faker->randomElement([1, 2]),
            'timestamp' => $this->faker->dateTimeBetween('2021-01-01 12:00:00', '2022-05-09 12:00:00'),
            'time_spent' => $this->faker->dateTime('-1 day'),
        ];
    }
}
