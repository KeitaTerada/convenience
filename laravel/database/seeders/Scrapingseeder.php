<?php

namespace Database\Seeders;

use App\Models\allergy;
use App\Models\Category;
use App\Models\Product;
use App\Models\productallergy;
use App\Models\productcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\DomCrawler\Crawler;
use function GuzzleHttp\Promise\each;

class Scrapingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //処理するたびに重複を全削除
        Product::truncate();
        Category::truncate();
        productallergy::truncate();
        productcategory::truncate();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.lawson.co.jp/recommend/');
        $crawler = new Crawler($response->getBody()->getContents());

        //カテゴリーリンク取得
        $product_category = '';
        $product_category_link = '';
        $is_end = false;        
        $crawler->filter('.contentsNav4')->first()->filter('li')->each(function($li) use(&$is_end, $product_category, $product_category_link){ //contentsNav4の一個目だけ抜き出して、それぞれのliタグを抜き出し
            $product_category = $li->filter('a');
            $product_category_link = $li->filter('a');
            if ($product_category->text() == 'ローソンオリジナル'){
                $is_end = true;
            }
            if($is_end) return;
            echo $product_category->text();
            echo $product_category_link->attr('href');

            // カテゴリーテーブルの検索（カテゴリー名）
            $category = Category::where('name',$product_category->text())->first();
            // カテゴリーテーブルの登録（存在しないカテゴリーの場合）
            if (!$category){
                $category = Category::create([
                    'name' => $product_category->text()
                ]);
            }
            // 同一カテゴリー名のレコードがすでに存在する場合
            //  なにもしない
            // 同一カテゴリー名のレコードが
            sleep(1);

            //商品リンク取得
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://www.lawson.co.jp'.$product_category_link->attr('href'));
            $crawler = new Crawler($response->getBody()->getContents());

            $product_link = '';

            $crawler->filter('#sec-02 > ul.col-4 > li')->each(function($li) use($product_link,&$category){
                $product_link = $li->filter('p.img > a');
                echo $product_link->attr('href');


                //値段、名前、カロリー、画像、アレルギー取得
                $product_price='';
                $product_name='';
                $product_kcal='';
                $product_image='';
                $product_allergy='';

                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', 'https://www.lawson.co.jp'.$product_link->attr('href'));
                $crawler = new Crawler($response->getBody()->getContents());
                $crawler->filter('#sec-01')->each(function($li) use($product_price, $product_name, $product_kcal, $product_image, $product_allergy, &$category){
                    $product_price = $li->filter('div.rightBlock > dl > dd > span')->first();
                    $product_name = $li->filter('p.ttl');
                    $product_image = $li->filter('div.leftBlock > p.mb05 > img');
                    echo $product_price->text();
                    echo $product_name->text();
                    echo $product_image->attr('src');
                    //echo $product_allergy->text();
                    $clawler_price = $product_price->text();
                        $clawler_price = str_replace('円', '', $clawler_price);
                        $product = Product::create([
                            'name' =>$product_name->text(),
                            'image' => 'https://www.lawson.co.jp'. $product_image->attr('src'),
                            'price' => $clawler_price,
                            'convenience_id' => 1
                        ]);

                    
                        productcategory::create([
                            'product_id' => $product->id,
                            'category_id' => $category->id,
                        ]);


                    $product_allergy = $li->filter('div.rightBlock dd.allergy > div.cf > dl > dt')->each(function($dt) use(&$product){
                        
                        $allergy = allergy::where('name',$dt->text())->first();

                        if(!$allergy){
                            $allergy = allergy::create([
                                'name' => $dt->text()
                            ]);
                        }
                        
                        productallergy::create([
                            'product_id' => $product->id,
                            'allergy_id' => $allergy->id,
                        ]);
                    });
                    sleep(1);

                });

                /*
                $crawler->filter('#sec-02 > ul > li')->each(function($li) use($product_price,$product_name,$product_kcal,$product_image,$product_allergy){

                });
                */


            });

            
            

        
        
        });
    }

}

