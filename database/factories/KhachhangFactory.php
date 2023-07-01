<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\khachhang>
 */
class KhachhangFactory extends Factory
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
            'ten_kh' => fake()->name(),
            'dia_chi' => fake()->text(),
            'adress' => fake()->text(),
            'ngay_sinh' => fake()->date(),
            'status' => 1
        ];

    }
}
