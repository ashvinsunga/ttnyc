<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create(
            [
                'product_name' => 'Magnum Shoes',
                'product_category' => 'Shoes',
                'product_description' => 'The best magnum shoes',
                'product_image' => 'shoes1.jpg',
                'product_image2' => 'shoes1.jpg',
                'product_image3' => 'shoes1.jpg',
                'product_image4' => 'shoes1.jpg',
                'product_price' => 155.0,
                'product_special_offer' => 50,
                'product_color' => 'jetbrown',
            ]
        );
    }
}
