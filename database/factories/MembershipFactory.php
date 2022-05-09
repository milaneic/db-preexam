<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
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
            'membership_type' => $this->faker->randomElement([1, 2]),
            'people_id' => $this->faker->unique()->numberBetween(1, 100),
            'start_date' => $this->faker->dateTimeBetween('2020-01-01', '2022-05-09'),
            'end_date' => $this->faker->dateTimeInInterval('2020-01-01', rand(180, 765) . ' days'),
            'status' => $this->faker->randomElement(['active', 'inactive', 'paused'])
        ];
    }
}
