<html>

<head>
    <title>Nendoroid</title>
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
                <li class="active"><a href="#">Nendoroid</a></li>
                <li><a href="page_figma.php">Figma</a></li>
                <li><a href="page_figure.php">Figure</a></li>
            </ul>
        </div>
    </nav>
<!-- stop Menu Bar -->

    <div class="header">
        <h2>Nendoroid</h2>
    </div>

    <div class="row">
    <div class="column side">
    </div>

    <div class="column middle">
    <div class="middle">
        <form action="check_bill.php" id="form1" name="form1">
            <div class="gallery">
                <img src="img/nendoroid1.jpg" alt="nendoroid1" width="600" height="400">
                <div class="desc">Platelet</div>
                <input type="number" value="1" id="number1" name="number">
                <input type="hidden" value="500" id="price1" name="price">
                <input type="hidden" value="img/nendoroid1.jpg" id="location" name="location">
                <input type="hidden" name="sum" id="sum1">
                <button type="submit" onclick="Rf_sum1()()" value="ซื้อสินค้า">ซื้อสินค้า</button>
            </div>
        </form>

        <form action="check_bill.php" id="form2" name="form2">
            <div class="gallery">
                <img src="img/nendoroid2.jpg" alt="nendoroid2" width="600" height="400">
                <div class="desc">Alice</div>
                <input type="number" value="1" id="number2" name="number">
                <input type="hidden" value="750" id="price2" name="price">
                <input type="hidden" value="img/nendoroid2.jpg" id="location" name="location">
                <input type="hidden" name="sum" id="sum2">
                <button type="submit" onclick="Rf_sum2()()" value="ซื้อสินค้า">ซื้อสินค้า</button>
            </div>
        </form>

        <form action="check_bill.php" id="form3" name="form3">
            <div class="gallery">
                <img src="img/nendoroid3.jpg" alt="nendoroid3" width="600" height="400">
                <div class="desc">Ai Hinatsuru</div>
                <input type="number" value="1" id="number3" name="number">
                <input type="hidden" value="1000" id="price3" name="price">
                <input type="hidden" value="img/nendoroid3.jpg" id="location" name="location">
                <input type="hidden" name="sum" id="sum3">
                <button type="submit" onclick="Rf_sum3()()" value="ซื้อสินค้า">ซื้อสินค้า</button>
            </div>
        </form>
    </div>
</div>

<div class="column side">
</div>
</div>

</body>

</html>