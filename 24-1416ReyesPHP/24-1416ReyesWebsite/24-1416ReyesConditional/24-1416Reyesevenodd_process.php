<?php
session_start();

if(isset($_POST['number'])){

    $num = intval($_POST['number']);
    $result = "";

    if($num % 2 == 0){
        $result = "EVEN";
    }
    else{
        $result = "ODD";
    }

    $_SESSION['conditionals']['sample4'] =
        "$num is $result";

    echo $result;
}
?>