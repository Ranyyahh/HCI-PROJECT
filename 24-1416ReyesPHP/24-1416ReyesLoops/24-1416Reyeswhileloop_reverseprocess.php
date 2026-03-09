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
    

    $digits = ltrim($input, '-');
    if(strlen($digits) > 9) {
        echo "Maximum of 9 digits only.";
        exit;
    }
    
    if(strlen($digits) < 2) {
        echo "Please enter at least 2 digits.";
        exit;
    }
    
    $num = intval($input);
    $reversed = 0;
    $workingNum = abs($num);
    
    while($workingNum > 0) {
        $reversed = $reversed * 10 + ($workingNum % 10);
        $workingNum = intval($workingNum / 10);
    }
    
    if($num < 0) {
        $reversed = -$reversed;
    }
    
    $_SESSION['loops']['sample4'] = $reversed;
    echo $reversed;
}
?>