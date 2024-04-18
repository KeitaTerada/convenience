<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <form action="/result" method="get">
        @csrf
        <link  rel="stylesheet" href="css/top.css">
        <body><h1 class="rgb-css" style="text-align:center">L4WSON 飯ガチャ</h1></body>    
    <tr>
        <div class="box select">
        <h2 class="green-css" style="text-align:center">金額を設定しろー！！</h2>
        <h1 style="text-align:center"><select name="money">
            <option value="1000">1,000</option>
            <option value="2000">2,000</option>
            <option value="5000">5,000</option>
            <option value="8000">8,000</option>
            <option value="10000">10,000</option>
            </select><td><a class = "en_font">円</a></td>
        </div><script></script>
    </tr>
        <div class="fixed_btn" style="text-align:center">
            <input type="submit" class="btn-gradient-3d" name="spin" value="ガチャを回す">
        </div>           
    </form>
</body>
</html>
