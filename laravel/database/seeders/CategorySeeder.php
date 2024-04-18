<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => '惣菜'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'おにぎり'
        ]);
        Category::create([
            'id' => 3,
            'name' => 'サンドウィッチ'
        ]);

        Category::create([
            'id' => 4,
            'name' => 'パン'
        ]);
        Category::create([
            'id' => 5,
            'name' => 'めん'
        ]);
        Category::create([
            'id' => 6,
            'name' => 'パスタ'
        ]);
        Category::create([
            'id' => 7,
            'name' => '飲料'
        ]);
        Category::create([
            'id' => 8,
            'name' => 'お菓子'
        ]);
        Category::create([
            'id' => 9,
            'name' => 'お菓子'
        ]);
        Category::create([
            'id' => 10,
            'name' => 'デザート'
        ]);


    }
}
