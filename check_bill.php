<?php

    $location = "" ; // ที่อยู่รูป
    $number = "0" ;  // จำนวน
    $price = "" ; // ราคา
    $sum = "0";

    if(isset($_REQUEST['location'])){$location = $_REQUEST['location'];}
    if(isset($_REQUEST['number'])){$number = $_REQUEST['number'];}
    if(isset($_REQUEST['price'])){$price = $_REQUEST['price'];}
    
    if(isset($_REQUEST['sum'])){$sum = $_REQUEST['sum'];} 

?>
<html>

<head>
    <title>Model Shop</title>
</head>

<body>
    <center>
        <img src="<?php echo $location ;?>" height="600px" weight="400px"> <br>
        <label><?php echo "จำนวน: ".$number; ?></label> <br>
        <label><?php echo "ราคา: ".$price; ?></label> <br>
        <label><?php echo "ราคารวม: ".$sum; ?></label>
    </center>
</body>

</html>