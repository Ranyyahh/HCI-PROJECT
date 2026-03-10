<?php
session_start();

if(isset($_POST['number'])) {
    $input = trim($_POST['number']);
    
    if($input === "") {
        echo "Please enter a number.";
        exit;
    }
    
    // Check kung puro digits at negative sign lang
    if(!preg_match('/^-?\d+$/', $input)) {
        echo "Please enter a valid whole number.";
        exit;
    }
    
    // Check decimal (kahit hindi na kailangan dahil sa regex above)
    if(strpos($input, '.') !== false) {
        echo "Please enter a whole number.";
        exit;
    }
    
    // Bilangin ang digits (walang negative sign)
    $digits = ltrim($input, '-');
    $digitCount = strlen($digits);
    
    if($digitCount > 9) {
        echo "Maximum of 9 digits only. You entered $digitCount digits.";
        exit;
    }
    
    if($digitCount < 2) {
        echo "Please enter at least 2 digits.";
        exit;
    }
    
    // STRING REVERSAL - hindi mathematical para iwas overflow
    if($input < 0) {
        // Para sa negative: tanggalin ang '-', i-reverse, ibalik ang '-'
        $positive = substr($input, 1);
        $reversedPositive = strrev($positive);
        $reversed = '-' . $reversedPositive;
    } else {
        // Para sa positive: deretsong strrev lang
        $reversed = strrev($input);
    }
    
    $_SESSION['loops']['sample4'] = $reversed;
    echo "Reversed: $reversed";
}
?>