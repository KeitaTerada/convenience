<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\allergy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        allergy::create([
            'id' => 1,
            'name' =>'卵'
            
        ]);

        allergy::create([
            'id' => 2,
            'name' =>'乳'
        ]);

        allergy::create([
            'id' => 3,
            'name' =>'小麦'
        ]);
        
        allergy::create([
            'id' => 4,
            'name' =>'そば'
        ]);   

        allergy::create([
            'id' => 5,
            'name' =>'落花生'
        ]);   

        allergy::create([
            'id' => 6,
            'name' =>'えび'
        ]);   

        allergy::create([
            'id' => 7,
            'name' =>'かに'
        ]);   
    }
}
