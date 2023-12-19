<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id'      =>fake()->randomElement(Event::pluck('id')),
            'full_name'     =>fake()->name(),
            'year_level'    =>fake()->randomElement(['1','2','3','4']),
            'address'       =>fake()->address(),
        ];
    }
}
