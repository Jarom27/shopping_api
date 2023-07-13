<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::factory()->has(Item::factory()->count(6))->create();
        Category::factory()->has(Item::factory()->count(4))->create();
        Category::factory()->has(Item::factory()->count(7))->create();
        Category::factory()->has(Item::factory()->count(3))->create();
        Category::factory()->has(Item::factory()->count(8))->create();
    }
}
