<?php
session_start();

if(isset($_POST['number'])){

    $num = intval($_POST['number']);
    $output = "";

    if($num > 0){
        for($i = 1; $i <= $num; $i++){
            if($i % 2 == 0){
                $output .= $i . " ";
            }
        }
    } else {
        $output = "Please enter a valid positive number.";
    }

    $_SESSION['loops']['sample2'] = $output;

    echo $output;
}
?>