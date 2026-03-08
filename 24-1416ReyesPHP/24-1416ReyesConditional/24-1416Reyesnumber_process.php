<?php
session_start();

if(isset($_POST['number'])){

    $num = floatval($_POST['number']);
    $result = "";

    if($num > 0){
        $result = "POSITIVE";
    }
    else if($num < 0){
        $result = "NEGATIVE";
    }
    else{
        $result = "ZERO";
    }

    $_SESSION['conditionals']['sample3'] =
        "$num is $result";

    echo $result;
}
?>