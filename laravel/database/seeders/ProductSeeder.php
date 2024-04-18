<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\productallergy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::create([
            'id' => 1,
            'name' => '高菜明太',
            'image' => 'https://www.family.co.jp/content/dam/family/goods/0411363.jpg',
            'price' => 158,
            'kcal' => 10,
            'convenience_id' => 3,
        ]);
 
        Product::create([
            'id' => '2',
            'name' => 'たれかつ弁当',
            'image' => 'https://img.7api-01.dp1.sej.co.jp/item-image/048152/D30D48011CC7B63EAB19F04A1EE25902.jpg',
            'price' => '551',
            'kcal' => '937',
            'convenience_id' => '1',
        ]);

        Product::create([
            'id' => '3',
            'name' => '卵焼きサンド',
            'image' => 'https://haruchika777.com/wp-content/uploads/2019/10/seveneleven-fuwamochi-atsuyaki-tamago-sand2019-10-21-05.jpg',
            'price' => '303',
            'kcal' => '412',
            'convenience_id' => '1',
        ]);

        Product::create([
            'id' => '4',
            'name' => 'ふわもちブレッド',
            'image' => 'https://img.7api-01.dp1.sej.co.jp/item-image/290224/CF44B3B0821DE3D884A9B5D2DEEFC4A5.jpg',
            'price' => '182',
            'kcal' => '162',
            'convenience_id' => '1',
        ]);

        Product::create([
            'id' => '5',
            'name' => '新そば',
            'image' => 'https://img.7api-01.dp1.sej.co.jp/item-image/093336/00EF20221861D331D491A0A51071B596.jpg',
            'price' => '484',
            'kcal' => '355',
            'convenience_id' => '1',
        ]);

        Product::create([
            'id' => '6',
            'name' => 'たらこの和風パスタ',
            'image' => 'https://www.lawson.co.jp/recommend/original/detail/img/l676878_2.png',
            'price' => '559',
            'kcal' => '504',
            'convenience_id' => '2',
        ]);

        Product::create([
            'id' => '7',
            'name' => 'レモンティ',
            'image' => 'https://www.lawson.co.jp/recommend/original/detail/img/l672294.png',
            'price' => '100',
            'kcal' => '80',
            'convenience_id' => '2',
        ]);

        Product::create([
            'id' => '8',
            'name' => 'ゴールドマスター350ml',
            'image' => 'https://www.lawson.co.jp/recommend/original/detail/img/l522665_4.png',
            'price' => '128',
            'kcal' => '200',
            'convenience_id' => '2',
        ]);

        Product::create([
            'id' => '9',
            'name' => '贅沢一粒ホワイトストロベリーチョコ',
            'image' => 'https://www.family.co.jp/content/dam/family/goods/4823209.jpg',
            'price' => '298',
            'kcal' => '413',
            'convenience_id' => '3'
        ]);

        Product::create([
            'id' => '10',
            'name' => 'キャラメルクリームシュー',
            'image' => 'https://www.family.co.jp/content/dam/family/goods/1943016.jpg',
            'price' => '168',
            'kcal' => '5000',
            'convenience_id' => '3'
        ]);
    }
}
