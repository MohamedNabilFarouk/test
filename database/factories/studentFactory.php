<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' =>$this->faker->name,
            'school_id'=> $this->faker->randomElement(School::pluck('id')),
            'order'=>  $this->faker->randomElement(School::pluck('id')),
        ];
    }
}
