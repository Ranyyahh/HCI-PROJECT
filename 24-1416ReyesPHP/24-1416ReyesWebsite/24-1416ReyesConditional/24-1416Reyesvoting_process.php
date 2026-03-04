<?php
session_start();

if(isset($_POST['age'])){

    $age = intval($_POST['age']);
    $result = "";

    if($age >= 18){
        $result = "YOU ARE QUALIFIED TO VOTE!";
    }
    else if($age > 0){
        $result = "YOU ARE NOT QUALIFIED TO VOTE!";
    }
    else{
        $result = "INPUT ERROR!";
    }

    $_SESSION['conditionals']['sample5'] =
        "Age: $age - $result";

    echo $result;
}
?>