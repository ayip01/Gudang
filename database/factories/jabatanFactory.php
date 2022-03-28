<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class jabatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uraian' => $this->faker->jobTitle()
        ];
    }
}
