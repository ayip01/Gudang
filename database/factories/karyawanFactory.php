<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class karyawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_karyawan' => $this->faker->name(),
            'nik' => $this->faker->creditCardNumber(),
            'id_dept' => 1,
            'id_jabatan' => 1,
        ];
    }
}
