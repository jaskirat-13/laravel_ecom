<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'laptop' . $i,
                'slug' => 'laptop-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 1,
                'image' => 'products/dummy/image0.jpg',
                'images' => '["products/dummy/image0.jpg", "products/dummy/image0.jpg", "products/dummy/image0.jpg"]',
                'description' => 'High-performance laptop ideal for gaming, programming, and heavy multitasking. Features fast SSD storage and crisp display.',
                'quantity' => 10
            ]);
        }

        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Desktop' . $i,
                'slug' => 'desktop-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 2,
                'image' => 'products/dummy/image1.jpg',
                'images' => '["products/dummy/image1.jpg", "products/dummy/image1.jpg", "products/dummy/image1.jpg"]',
                'description' => 'Powerful desktop computer perfect for office productivity, gaming setups, and home use. Smooth performance guaranteed.',
                'quantity' => 10
            ]);
        }

        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Phone' . $i,
                'slug' => 'phone-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 3,
                'image' => 'products/dummy/image2.jpg',
                'images' => '["products/dummy/image2.jpg", "products/dummy/image2.jpg", "products/dummy/image2.jpg"]',
                'description' => 'Latest smartphone featuring a stunning display, long battery life, and high-speed performance for daily tasks.',
                'quantity' => 10
            ]);
        }

        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Tablet' . $i,
                'slug' => 'tablet-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 4,
                'image' => 'products/dummy/image3.jpg',
                'images' => '["products/dummy/image3.jpg", "products/dummy/image3.jpg", "products/dummy/image3.jpg"]',
                'description' => 'Portable tablet with a sleek design, ideal for reading, streaming, and light productivity on the go.',
                'quantity' => 10
            ]);
        }

        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'TV' . $i,
                'slug' => 'tv-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 5,
                'image' => 'products/dummy/image4.jpg',
                'images' => '["products/dummy/image4.jpg", "products/dummy/image4.jpg", "products/dummy/image4.jpg"]',
                'description' => 'Smart LED TV with 4K resolution and HDR support, delivering an immersive entertainment experience.',
                'quantity' => 10
            ]);
        }

        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Camera' . $i,
                'slug' => 'camera-' . $i,
                'details' => '15 inches 1TB SSD 16 GB RAM',
                'price' => rand(1000, 9999),
                'category_id' => 6,
                'image' => 'products/dummy/image5.jpg',
                'images' => '["products/dummy/image5.jpg", "products/dummy/image5.jpg", "products/dummy/image5.jpg"]',
                'description' => 'High-resolution digital camera designed for professionals and enthusiasts to capture stunning photos and videos.',
                'quantity' => 10
            ]);
        }

        $products = Product::all();
        foreach ($products as $product) {
            if($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
