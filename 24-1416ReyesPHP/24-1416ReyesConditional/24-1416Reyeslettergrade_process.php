<?php
session_start();

if(isset($_POST['grade'])){

    $grade = strtoupper(trim($_POST['grade']));
    $result = "";

    if($grade == "A"){
        $result = "EXCELLENT!";
    }
    else if($grade == "B"){
        $result = "ABOVE AVERAGE!";
    }
    else if($grade == "C"){
        $result = "AVERAGE!";
    }
    else if($grade == "D"){
        $result = "BELOW AVERAGE!";
    }
    else if($grade == "F"){
        $result = "FAILED!";
    }
    else{
        $result = "INPUT ERROR!";
    }

    $_SESSION['conditionals']['sample1'] =
        "Grade: $grade - $result";

    echo $result;
}
?>