<?php
session_start();

if(isset($_POST['number'])) {
    $input = trim($_POST['number']);
    
   
    if($input === "") {
        $output = "Please enter a number.";
        echo $output;
        exit;
    }
    
    if(!is_numeric($input)) {
        $output = "Please enter a valid number.";
        echo $output;
        exit;
    }
    
    if(strpos($input, '.') !== false) {
        $output = "Please enter a whole number (no decimals).";
        echo $output;
        exit;
    }
    
    $num = intval($input);
    
    if($num < 0) {
        $output = "Please enter a non-negative number.";
        echo $output;
        exit;
    }
    
    if($num > 20) {
        $output = "Number is too large. Please enter 20 or less.";
        echo $output;
        exit;
    }
    

    $factorial = 1;
    for($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    

    $output = "Factorial of $num is: $factorial";
    

    $_SESSION['loops']['sample3'] = $output;
    

    echo $output;
}
?>