<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
        public function gacha(Request $request){
            $request->code;
            $price = (int)$request->money;

            $total = 0;
            $products = [];
            while ($pro = Product::where("price", "<" , $price)->inRandomOrder()->first())
            {
                if(!$pro){
                    break;
                }
                $price -= $pro -> price;
                $products[]=$pro; 
                $total = $total + $pro -> price;
            } 

            $data = ['products' =>$products, 'total' =>$total];
            return view('result',)->with($data);

    }
}
