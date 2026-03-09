<?php
session_start();

if(isset($_POST['grade'])) {
    $input = trim($_POST['grade']);
    
    if($input === "") {
        $output = "Please enter your grade.";
        echo $output;
        exit;
    }
    
    if(!is_numeric($input)) {
        $output = "Please enter a valid number.";
        echo $output;
        exit;
    }
    
    $grade = floatval($input);
    
    if($grade < 0 || $grade > 100) {
        $output = "Grade must be between 0 and 100.";
        echo $output;
        exit;
    }
    
    if(($grade * 100) % 1 !== 0) {
        $output = "Please enter grade with maximum 2 decimal places.";
        echo $output;
        exit;
    }
    
    if($grade >= 75) {
        $result = "PASSED!";

    } else {
        $result = "FAILED!";
   
    }
    
    $output = "YOU $result";
    
    $_SESSION['conditional']['sample2'] = $output;
    echo $output;
}
?>