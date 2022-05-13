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
        $options = ["-1 day 3 minutes", "-1 day 4 minutes", "-1 day 5 minutes", "-1 day 1 hour"];
        $start_at = date('Y-m-d H:i:s', strtotime($options[rand(0, count($options) - 1)]));

        return [
            //
            'membership_type' => $this->faker->randomElement([1, 2]),
            'people_id' => $this->faker->unique()->numberBetween(1, 100),
            'begin_date' => $start_at,
            'end_date' => date('Y-m-d H:i:s', strtotime($start_at . " +1 day")),
            'status' => $this->faker->randomElement(['active', 'inactive', 'paused'])
        ];
    }
}
