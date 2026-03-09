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
    
    $number = floatval($input);
    
    if($number > 1000000 || $number < -1000000) {
        $output = "Number is too large. Please enter between -1,000,000 and 1,000,000.";
        echo $output;
        exit;
    }
    
    if($number > 0) {
        $classification = "POSITIVE";
        $emoji = "➕";
    } elseif($number < 0) {
        $classification = "NEGATIVE";
        $emoji = "➖";
    } else {
        $classification = "ZERO";
        $emoji = "0️⃣";
    }
    
    $output = "$classification";
    
    $_SESSION['conditional']['sample3'] = $output;
    echo $output;
}
?>