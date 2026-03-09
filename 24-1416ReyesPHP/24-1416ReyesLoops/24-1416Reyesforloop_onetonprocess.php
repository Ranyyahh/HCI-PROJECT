<?php
session_start();

if(isset($_POST['number'])) {
    $input = trim($_POST['number']);
    

    if($input === "") {
        echo "Please enter a number.";
        exit;
    }
    
    if(!is_numeric($input)) {
        echo "Please enter a valid number.";
        exit;
    }
    
    if(strpos($input, '.') !== false) {
        echo "Please enter a whole number.";
        exit;
    }
    
    $num = intval($input);
    
    if($num <= 0) {
        echo "Please enter a positive number greater than 0.";
        exit;
    }
    
    if($num > 1000) {
        echo "Number is too large. Please enter 1000 or less.";
        exit;
    }
    
    $output = "";
    for($i = 1; $i <= $num; $i++) {
        $output .= $i . " ";
    }
    
    $_SESSION['loops']['sample1'] = $output;
    echo $output;
}
?>