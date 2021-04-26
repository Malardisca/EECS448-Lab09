<?php
    echo "<link rel=\"stylesheet\" href=\"exercise3.css\" type="text/css">";
    echo "<h1>Order Receipt</h1>";

    $CQ = $_POST['Epic'];
    $EQ = $_POST['Rare'];
    $AQ = $_POST['Normal'];
    $shipping = $_POST['ship'];
    $pass = $_POST['password'];
    $user = $_POST['email'];
    $CP = $CQ * 2000;
    $EP = $EQ * 1000;
    $AP = $AQ * 0.92;
    $SP = 0;

    echo "<h3>Welcome $user!</h3>";
    echo "<div>Your current password is: $pass</div>";
    echo "<h3>Your items: </h3>";
    echo "<div>Courese - Quantity: $CQ, Item total: \$$CP.00</div>";
    echo "<div>Rare - Quantity: $EQ, Item total: \$$EP.00</div>";
    echo "<div>Normal - Quantity: $AQ, Item total: \$$AP.00</div>";
    if($shipping == "f") {echo "Shipping selected: free 7 day";}
    if($shipping == "o") {echo "Shipping selected: overnight - \$50.00"; $SP = 50;}
    if($shipping == "t") {echo "Shipping selected: three day - \$5.00"; $SP = 5;}
    $total = $CP + $EP + $AP + $SP;
    echo <h2>"ORDER TOTAL: \$$total.00 "</h2>;
?>
