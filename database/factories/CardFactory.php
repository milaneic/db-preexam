<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
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
            'membership_id' => $this->faker->numberBetween(1, 100),
            'balance' => $this->faker->randomFloat(2, 1, 20),
            'status' => $this->faker->randomElement(['active', 'inactive']),

        ];
    }
}
