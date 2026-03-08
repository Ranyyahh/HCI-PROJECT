<?php
session_start();

if(isset($_POST['grade'])){

    $grade = floatval($_POST['grade']);
    $result = "";

    if($grade >= 75){
        $result = "PASSED!";
    }
    else{
        $result = "FAILED!";
    }

    $_SESSION['conditionals']['sample2'] =
        "Grade: $grade - $result";

    echo $result;
}
?>