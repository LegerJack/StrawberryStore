<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProductImages;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->count(30)
            ->create();

        Category::factory()
            ->count(10)
            ->create();

        $categories = Category::all();
        Product::all()->each(
            function ($product) use ($categories) {
                $product->categories()->attach(
                    $categories->random(
                        rand(1, $categories->count())
                    )->pluck('id')->toArray()
                );
            }
        );

        ProductImages::factory()
            ->count(30)
            ->create();
    }
}
