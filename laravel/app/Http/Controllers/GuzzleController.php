<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

use function GuzzleHttp\Promise\each;

class GuzzleController extends Controller
{
    public function getContents(){
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
            if ($product_category->text() == '注目商品'){
                $is_end = true;
            }
            if($is_end) return;
            echo $product_category->text();
            echo $product_category_link->attr('href');

            sleep(1);

            //商品リンク取得
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://www.lawson.co.jp'.$product_category_link->attr('href'));
            $crawler = new Crawler($response->getBody()->getContents());

            $product_link = '';

            $crawler->filter('#sec-02 > ul > li')->each(function($li) use($product_link){
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

                sleep(1);

                /*
                $crawler->filter('#sec-02 > ul > li')->each(function($li) use($product_price,$product_name,$product_kcal,$product_image,$product_allergy){

                });
                */


            });

            
            

        
        
        });
    }



        /*
        $list = $crawler->filter('#sec-02 > ul > li')->each(function($li) use(){ //eachでそれぞれのliタグを抜き出し 
            if ($li->filter('p.ico_new')->count()){
                $pidx = 3;
                
            }else {
                $pidx = 2;
            }
            $product_link = $li->filter('p.img > a');
            $img = $li->filter('p.img > a > img');
            $title = $li->filter('p.ttl');
            $kcal = $li->filter('p')->eq($pidx);
            $price = $li->filter('p.price');
             
            echo $title->text() . "<br>";
            echo $kcal->text() . "<br>";
            echo $price->text() . "<br>";
            //  $img->attr('src') = "/recomend/original ...."
            echo '<img src="https://www.lawson.co.jp' . $img->attr('src') . '"><br>'; //ここきれいにしよ
            echo "<hr>";

            //$price = str_replace('円(税込)', '', $price->text());
            //$kcal = str_replace('kcal', '', $kcal->text());
                
            $crawlerprice = $price->text();
            $crawlerprice = str_replace('円(税込)', '', $crawlerprice);
            
            $crawlerkcal = $kcal->text();
            $crawlerkcal = str_replace('kcal', '', $crawlerkcal);

            Product::insert([
                'name' => $title->text(),
                'image' => 'https://www.lawson.co.jp'.$img->attr('src'),
                'price' => $crawlerprice,
                'kcal' => $crawlerkcal,
                'convenience_id' => 2,
            ]);
        });//


    }

        //$allergy = $crawler->filter('dd.allergy > dt > ');

        //echo $allergy->text(); */
        
}