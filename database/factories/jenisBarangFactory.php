<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class jenisBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uraian' => $this->faker->text(100)
        ];
    }
}
