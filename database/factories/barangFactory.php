<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class barangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->streetSuffix(),
            'id_satuan' => 1,
            'id_jenis' => 1,
            'no_sku' => $this->faker->creditCardNumber(),
            'jml_barang' => 1,
            'status' => 'AKTIF',
            'lokasi' => $this->faker->streetName(),
        ];
    }
}
