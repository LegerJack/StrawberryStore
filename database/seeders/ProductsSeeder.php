<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::factory()
            ->count(30)
            ->create();

        Categories::factory()
            ->count(10)
            ->create();

        $categories = Categories::all();
        Products::all()->each(
            function ($product) use ($categories) {
                $product->categories()->attach(
                    $categories->random(
                        rand(1, $categories->count())
                    )->pluck('id')->toArray()
                );
            }
        );
    }
}
