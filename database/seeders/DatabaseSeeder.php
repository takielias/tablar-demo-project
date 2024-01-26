<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $productCount = 0;
        $imageCount = 0;

        // Changed loop range to seed 30,000 products
        foreach (range(1, 30000) as $index) {
            $productCount++;
            $imageCount = $imageCount % 100 + 1; // Resets the image counter effectively

            $uniqueCode = 'PROD-' . Str::upper(Str::random(10)) . '-' . $productCount;
            Product::create([
                'product_name' => $faker->name(),
                'product_code' => $uniqueCode,
                'product_price' => $faker->randomFloat(2, 10, 500),
                'product_description' => $faker->sentence,
                'product_quantity' => $faker->randomNumber(5),
                'product_image' => "https://picsum.photos/id/$imageCount/350/350",
            ]);
        }
    }
}
