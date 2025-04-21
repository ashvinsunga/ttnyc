<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Seeders\ProductSeeder;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     Product::factory(12)->create();
    //     // User::factory(10)->create();

    //     // User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);
    //     // $this->call([ProductSeeder::class,]);

    // }
    public function run()
    {
        $products =  [
            //
            [
                'product_name' => fake()->word() . 'Clothes',
                'product_category' => 'clothes',
                'product_description' => fake()->sentence(),
                'product_image' => 'clothes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_image2' => 'clothes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_image3' => 'clothes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_image4' => 'clothes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_price' => fake()->randomFloat(2, 100, 200),
                'product_special_offer' => fake()->numberBetween(10, 70),
                'product_color' => fake()->safeColorName(),
            ],
            [
                //
                'product_name' => fake()->word() . 'Shoes',
                'product_category' => 'shoes',
                'product_description' => fake()->sentence(),
                'product_image' => 'shoes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_image2' => 'shoes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_image3' => 'shoes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_image4' => 'shoes' . fake()->numberBetween(1, 4) . '.jpg',
                'product_price' => fake()->randomFloat(2, 100, 200),
                'product_special_offer' => fake()->numberBetween(10, 70),
                'product_color' => fake()->safeColorName(),
            ]
        ];

        foreach ($products as $product) {
            Product::factory(4)->create($product);
        }
    }
}
