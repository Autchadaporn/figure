<html>

<head>
    <title>Model Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
    background-color: #eed462;
}

</style>

<body >

    <!-- start Menu Bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">Model Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="page_nendoroid.php">Nendoroid</a></li>
                <li><a href="page_figma.php">Figma</a></li>
                <li><a href="page_figma.php">Figure</a></li>
            </ul>
        </div>
    </nav>
    <!-- stop Menu Bar -->

    <br>
    <center>
        <h2> Welcome to Model Shop </h2>
    </center>
    <br>

    <!-- start slides -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <center><a href="page_figure.php"><img src="img/s1.jpg" weight="720px" height="360px"></a></center>
            </div>

            <div class="item">
                <center><a href="page_nendoroid.php"><img src="img/s4.jpg" weight="720px" height="360px"></a></center>
            </div>

            <div class="item">
                <center><a href="page_figma.php"><img src="img/s5.jpg" weight="720px" height="360px"></a></center>
            </div>
        </div>

    </div>
    <!-- stop slides -->

</body>

</html>