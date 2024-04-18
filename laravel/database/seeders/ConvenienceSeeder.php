<?php

namespace Database\Seeders;

use App\Models\Convenience;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Concat;

class ConvenienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Convenience::create([
            'id' => 1,
            'name' => 'seven'
        ]);

        Convenience::create([
            'id' => 2,
            'name' => 'lawson'
        ]);

        Convenience::create([
            'id' => 3,
            'name' => 'familymart'
        ]);
 
    }
}
