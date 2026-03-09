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
    
    if($num < 2) {
        echo "Please enter a number greater than or equal to 2.";
        exit;
    }
    
    if($num > 1000) {
        echo "Number is too large. Please enter 1000 or less.";
        exit;
    }
    

    $output = "";
    for($i = 2; $i <= $num; $i += 2) {
        $output .= $i . " ";
    }
    
    $_SESSION['loops']['sample2'] = $output;
    echo $output;
}
?>