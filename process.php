<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $order = $_POST['order'];
    $quantity = intval($_POST['quantity']);
    $cash = intval($_POST['cash']);

    
    $prices = [
        "burger" => 50,
        "fries" => 75,
        "steak" => 150
    ];

    
    $totalPrice = $prices[$order] * $quantity;
    
    
    $date = date("m/d/Y");

    
    if ($cash >= $totalPrice) {
        $change = $cash - $totalPrice;
        echo "
        <div class='container receipt'>
            <h2>Receipt</h2>
            <p>Total Price: Php$totalPrice</p>
            <p>You Paid: Php$cash</p>
            <p>Change: Php$change</p>
            <p>Date: $date</p>
        </div>";
    } else {
        echo "
        <div class='container error'>
            <h2>Sorry, balance not enough.</h2>
            <p>Please go back and enter the correct amount.</p>
        </div>";
    }
}
?>
