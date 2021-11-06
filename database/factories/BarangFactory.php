<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gudang_id' => mt_rand(1,2),
            'nama' => $this->faker->name(),
            'jumlah' => mt_rand(15,50),
            'added_time' => date('Y-m-d')
        ];
    }
}
