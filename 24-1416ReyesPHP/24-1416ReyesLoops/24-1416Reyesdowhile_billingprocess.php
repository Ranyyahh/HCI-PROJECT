<?php
if(isset($_POST['customerName']) && isset($_POST['classCode']) && isset($_POST['days'])){

    $name = htmlspecialchars($_POST['customerName']);
    $classCode = intval($_POST['classCode']);
    $days = intval($_POST['days']);

    if($classCode < 1 || $classCode > 3) {
        echo "Invalid Class Code!";
        exit();
    }

    switch($classCode){
        case 1:
            $classification = "SINGLE SUITE";
            $rec_fee = 1000;
            $rate = 2000;
            break;
        case 2:
            $classification = "SERVICE DELUXE";
            $rec_fee = 1500;
            $rate = 2500;
            break;
        case 3:
            $classification = "SERVICE PREMIERE";
            $rec_fee = 2000;
            $rate = 3000;
            break;
    }

    $counter = 1;
    $roomTotal = 0;
    
    echo "<strong>Customer:</strong> $name<br>";
    echo "<strong>Class:</strong> $classification<br>";
    echo "<strong>Daily Rate:</strong> ₱" . number_format($rate,2) . "<br>";
    echo "<hr>";
    echo "<strong>Daily Breakdown:</strong><br>";
    
    do {
        $roomTotal += $rate;
        echo "Day $counter: ₱" . number_format($rate,2) . 
             " (Subtotal: ₱" . number_format($roomTotal,2) . ")<br>";
        $counter++;
    } while($counter <= $days);
    
    $total = $roomTotal + $rec_fee;
    
    echo "<hr>";
    echo "<strong>Room Total:</strong> ₱" . number_format($roomTotal,2) . "<br>";
    echo "<strong>Recreation Fee:</strong> ₱" . number_format($rec_fee,2) . "<br>";
    echo "<strong>TOTAL BILL:</strong> ₱" . number_format($total,2);
}
?>