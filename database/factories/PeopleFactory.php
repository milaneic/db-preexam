<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
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
            'people_type' => $this->faker->numberBetween(1, 2),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'dob' => $this->faker->DateTimeBetween('1970-01-01', '2004-01-01'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'joined_at' =>  $this->faker->DateTimeBetween('2020-01-01', '2022-05-08'),
        ];
    }
}
