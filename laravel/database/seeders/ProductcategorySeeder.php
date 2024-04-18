<?php

namespace Database\Seeders;

use App\Models\productcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productcategory::create([
            'product_id' => 1,
            'category_id' => 1,
        ]);

        productcategory::create([
            'product_id' => 2,
            'category_id' => 2,
        ]);

        productcategory::create([
            'product_id' => 3,
            'category_id' => 3,
        ]);

        productcategory::create([
            'product_id' => 4,
            'category_id' => 4,
        ]);

        productcategory::create([
            'product_id' => 5,
            'category_id' => 5,
        ]);

        productcategory::create([
            'product_id' => 6,
            'category_id' => 6,
        ]);

        productcategory::create([
            'product_id' => 7,
            'category_id' => 7,
        ]);

        productcategory::create([
            'product_id' => 8,
            'category_id' => 8,
        ]);

        productcategory::create([
            'product_id' => 9,
            'category_id' => 9,
        ]);

        productcategory::create([
            'product_id' => 10,
            'category_id' => 10,
        ]);

    }
}
