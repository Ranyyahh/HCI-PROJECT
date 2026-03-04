<?php
if(isset($_POST['customerName']) && isset($_POST['classCode']) && isset($_POST['days'])){

    $name = htmlspecialchars($_POST['customerName']);
    $classCode = intval($_POST['classCode']);
    $days = intval($_POST['days']);

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
        default:
            echo "Invalid Class Code!";
            exit();
    }

    $total = ($days * $rate) + $rec_fee;

    echo "Customer: $name | Class: $classification | Total Bill: " 
         . number_format($total,2);
}
?>