<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'product_name' => fake()->word() . ' Shoes',
            'product_category' => 'Shoes',
            'product_description' => fake()->sentence(),
            'product_image' => 'shoes1.jpg',
            'product_image2' => 'shoes1.jpg',
            'product_image3' => 'shoes1.jpg',
            'product_image4' => 'shoes1.jpg',
            'product_price' => fake()->randomFloat(2, 100, 200),
            'product_special_offer' => fake()->numberBetween(10, 70),
            'product_color' => fake()->safeColorName(),
        ];
    }
}
