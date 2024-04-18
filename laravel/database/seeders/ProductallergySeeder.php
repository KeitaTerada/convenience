<?php

namespace Database\Seeders;

use App\Models\productallergy;
use App\Models\allergy;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductallergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productallergy::create([
            'product_id' => 1,
            'allergy_id' => 2
        ]);

        productallergy::create([
            'product_id' => 2,
            'allergy_id' => 3
        ]);

        productallergy::create([
            'product_id' => 3,
            'allergy_id' => 4
        ]);

        productallergy::create([
            'product_id' => 4,
            'allergy_id' => 2
        ]);

        productallergy::create([
            'product_id' => 5,
            'allergy_id' => 6
        ]);

        productallergy::create([
            'product_id' => 6,
            'allergy_id' => 1
        ]);

        productallergy::create([
            'product_id' => 7,
            'allergy_id' => 2
        ]);

        productallergy::create([
            'product_id' => 8,
            'allergy_id' => 3
        ]);

        productallergy::create([
            'product_id' => 9,
            'allergy_id' => 4
        ]);

        productallergy::create([
            'product_id' => 10,
            'allergy_id' => 5
        ]);

    }
}
