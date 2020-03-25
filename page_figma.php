<html>

<head>
    <title>Figma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
<div class="row">
    <div class="column side">
    </div>

    <div class="column middle">

<!-- start Menu Bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Model Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="page_nendoroid.php">Nendoroid</a></li>
                <li class="active"><a href="#">Figma</a></li>
                <li><a href="page_figure.php">Figure</a></li>
            </ul>
        </div>
    </nav>
<!-- stop Menu Bar -->

    <div class="header">
        <h2>Figma</h2>
    </div>

    <div class="row">
    <div class="column side">
    </div>

    <div class="column middle">
    <div class="middle">
    <form action="check_bill.php">
       
            <div class="gallery">
                <img src="img/figma1.jpg" alt="figma1" width="600" height="400">
                <div class="desc">Tanya Degurechaff</div>
                <input type="number" value="0" id="number1" name="number">
                <input type="hidden" value="Tanya Degurechaff" name="name" id="name1"> 
                <input type="hidden" value="1000" id="price1" name="price">
                <input type="hidden" value="img/figma1.jpg" id="location" name="location">
                <input type="hidden" name="sum" id="sum1">
                <button type="submit" onclick="findSUM1()" value="ซื้อสินค้า">ซื้อสินค้า</button>
            </div>
    </form>

    <form action="check_bill.php">
        <div class="gallery">
            <img src="img/figma2.jpg" alt="figma2" width="600" height="400">
            <div class="desc">LLENN</div>
            <input type="hidden" value="LLENN" name="name" id="name2"> 
            <input type="number" value="0" id="number2" name="number">
            <input type="hidden" value="1250" id="price2" name="price">
            <input type="hidden" value="img/figma2.jpg" id="location" name="location">
            <input type="hidden" name="sum" id="sum2">
            <button type="submit" onclick="findSUM2()" value="ซื้อสินค้า">ซื้อสินค้า</button>
        </div>
    </form>

    <form action="check_bill.php">
        <div class="gallery">
            <img src="https://lh3.googleusercontent.com/proxy/69xdgDjpyaxCel-lBfgXpaBEFUUY3ESjlutubidaSm4OkQBANtxZXqyh30_nDLsQw_0aCiZ3HShAR_K_kxgKU0FPlp_BSgTT" alt="figma3" width="600" height="400">
            <div class="desc">Snow Miku </div>
            <input type="hidden" value="Snow Miku: Snow Princess ver." name="name" id="name3"> 
            <input type="number" value="0" id="number3" name="number">
            <input type="hidden" value="1500" id="price3" name="price">
            <input type="hidden" value="img/figma3.jpg" id="location" name="location">
            <input type="hidden" name="sum" id="sum3">
            <button type="submit" onclick="findSUM3()" value="ซื้อสินค้า">ซื้อสินค้า</button>
        </div>
        </div>
    </form>

</div>

<div class="column side">
</div>
</div>

</body>

</html>