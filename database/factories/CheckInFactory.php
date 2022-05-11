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
        $random = rand(0, 3) * 60 + rand(1, 59) * 60;
        $timestamp = date('Y-m-d H:i:s', strtotime("- $random seconds", time()));
        // $random = rand(1, 2) * 60 + rand(1, 59) * 60;
        // $timestamp_out = strtotime("+$random seconds", $timestamp->getTimestamp());

        return [
            'card_id' => $this->faker->numberBetween(1, 100),
            'check_type' => $this->faker->randomElement([1, 2]),
            'timestamp' => $timestamp,
            // 'timestamp_out' => date('Y-m-d H:i:s', $timestamp_out),
        ];
    }
}
