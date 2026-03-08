<?php
session_start();

if(isset($_POST['number'])){

    $num = intval($_POST['number']);
    $result = 1;
    $output = "";

    if($num >= 0){
        for($i = 1; $i <= $num; $i++){
            $result *= $i;
        }
        $output = "Factorial of $num is: $result";
    } else {
        $output = "Please enter a valid non-negative number.";
    }

    $_SESSION['loops']['sample3'] = $output;

    echo $output;
}
?>