<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400',
                'brand' => 'Nike',
                'title' => 'Nike Air Zoom Pegasus Men Running Shoes',
                'rating' => 4.5,
                'reviews' => 1280,
                'sellPrice' => 7499.00,
                'orders' => '5200',
                'mrp' => '9999',
                'discount' => 25,
                'category' => 'men',
            ],
            [
                'img' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400',
                'brand' => 'Adidas',
                'title' => 'Adidas Ultraboost Women Walking Shoes',
                'rating' => 4.7,
                'reviews' => 890,
                'sellPrice' => 8999.00,
                'orders' => '3100',
                'mrp' => '11999',
                'discount' => 25,
                'category' => 'women',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
