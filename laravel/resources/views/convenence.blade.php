<!DOCTYPE html>
<head>
</head>
<body>
    <header>

    </header>
    <main>
        <form method="get">
            <select id="selection" name="code">
                <option value="1000">1000円</option>
                <option value="2000">2000円</option>
                <option value="4000">4000円</option>
                <option value="5000">5000円</option>
            </select>
            <select name="convenience">
                <option value="1">セブンイレブン</option>
                <option value="2">ローソン</option>
                <option value="3">ファミリーマート</option>
            <p><input type="submit" name="spin" value="ガチャ"></p>
        @foreach($products as $product)
            <p>{{$product->name}}</p>
            <img src={{$product->image}}>
            <p>{{$product->price}}</p>
            <p>{{$product->convenience_id}}</p>
        @endforeach
        
    </main>
</body>
