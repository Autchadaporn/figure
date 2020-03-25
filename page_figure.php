<html>

<head>
    <title>Figure</title>
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
                <li><a href="page_figma.php">Figma</a></li>
                <li class="active"><a href="#">Figure</a></li>
            </ul>
        </div>
    </nav>
<!-- stop Menu Bar -->


    <div class="header">
        <h2>Figure</h2>
    </div>

    <div class="row">
    <div class="column side">
    </div>

    <div class="column middle">
        <div class="middle">
        <form action="check_bill.php" >
            <div class="gallery">
                <img src="img/figure1.jpg" alt="figure1" width="600" height="400">
                <div class="desc">Silver Sachet with Grape Flower and Bird Pattern</div>
                <input type="number" value="1" id="number1" name="number">
                <input type="hidden" value="Silver Sachet with Grape Flower and Bird Pattern" id="name1" name="name">
                <input type="hidden" value="2000" id="price1" name="price">
                <input type="hidden" value="img/figure1.jpg" id="location" name="location">
                <input type="hidden" name="sum" id="sum1">
                <button type="submit" onclick="reduceSUM1()" value="ซื้อสินค้า">ซื้อสินค้า</button>
            </div>
        </form>

    <form action="check_bill.php">
        <div class="gallery">
            <img src="img/figure2.jpg" alt="figure2" width="600" height="400">
            <div class="desc">Senko</div>
            <input type="number" value="1" id="number2" name="number">
            <input type="hidden" value="2500" id="price2" name="price">
            <input type="hidden" value="img/figure2.jpg" id="location" name="location">
            <input type="hidden" name="sum" id="sum2">
            <button type="submit" onclick="reduceSUM2()" value="ซื้อสินค้า">ซื้อสินค้า</button>
        </div>
    </form>

    <form action="check_bill.php">
        <div class="gallery">
            <img src="img/figure3.jpg" alt="figure3" width="600" height="400">
            <div class="desc">Luna</div>
            <input type="number" value="1" id="number3" name="number">
            <input type="hidden" value="2750" id="price3" name="price">
            <input type="hidden" value="img/figure3.jpg" id="location" name="location">
            <input type="hidden" name="sum" id="sum3">
            <button type="submit" onclick="reduceSUM3()" value="ซื้อสินค้า">ซื้อสินค้า</button>
        </div>
    </form>
    </div>
</div>

<div class="column side">
</div>
</div>

</body>

</html>