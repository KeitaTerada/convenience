<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="css/result.css">
    <h1 style="text-align:center">ガチャ結果発表～！！</h1>
       
     
        @foreach($products as $product)
            <div>
                <div style="border: #0d00ff solid 1px; border-left: #0d00ff solid 10px; padding: 20px; background: rgb(255, 255, 255); font-size: 100%;"></td>
                    <h1 align="center" valign="top" style="margin: 0;">{{$product->name}}</h1>
                    <div class="container">
                        <div class="item"><img src="{{$product->image}}"></div>
                        <div class="item"><p>{{$product->price}}円</p></div>
                    </div>
                </td>
            </div>
        @endforeach
        <h2>合計金額は {{$total}}円だよん</h2>
</body>
</html>
