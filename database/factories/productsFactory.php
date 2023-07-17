<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name_products' => fake()->name(),
        'description' => fake()->text(),
        'price' => 300,
        'quantity' => 400,
        'image' => fake()->text(),
        'mau_sac' => fake()->safeColorName(),
        'id_cate' => 1,
        'ngay_nhap' => fake()->date(),
        'status' => 1
        ];
    }
}
