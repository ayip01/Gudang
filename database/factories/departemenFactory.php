<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class departemenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_dept' => $this->faker->text(100)
        ];
    }
}
