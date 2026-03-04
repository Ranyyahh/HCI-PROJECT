<?php
session_start();

if(isset($_POST['number'])){

    $num = intval($_POST['number']);
    $original = $num;
    $reversed = 0;

    if($num >= 0){

        while($num > 0){
            $digit = $num % 10;
            $reversed = $reversed * 10 + $digit;
            $num = intval($num / 10);
        }

        $output = "$reversed";

    } else {
        $output = "Please enter a valid number.";
    }

    $_SESSION['loops']['sample4'] = $output;

    echo $output;
}
?>