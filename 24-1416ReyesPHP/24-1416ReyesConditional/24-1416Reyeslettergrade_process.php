<?php
session_start();

if(isset($_POST['grade'])){

    $grade = strtoupper(trim($_POST['grade']));
    $result = "";

    switch($grade){
        case "A":
            $result = "EXCELLENT!";
            break;
        case "B":
            $result = "ABOVE AVERAGE!";
            break;
        case "C":
            $result = "AVERAGE!";
            break;
        case "D":
            $result = "BELOW AVERAGE!";
            break;
        case "F":
            $result = "FAILED!";
            break;
        default:
            $result = "INPUT ERROR!";
    }

    $_SESSION['conditionals']['sample1'] =
        "Grade: $grade - $result";

    echo $result;
}
?>