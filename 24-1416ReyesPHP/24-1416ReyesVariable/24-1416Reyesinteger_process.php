<?php
if(isset($_POST['birthYear'])){
    $birthYear = intval($_POST['birthYear']);
    $currentYear = date("Y");
    
    // Integer operations
    $age = $currentYear - $birthYear;
    $nextYearAge = $age + 1;
    $decadeBorn = floor($birthYear / 10) * 10;
    $yearsUntil100 = 100 - $age;
    
    echo "<div style='font-family: Arial, sans-serif;'>";
    echo "<strong>Birth Year:</strong> " . $birthYear . " <em>(Integer)</em><br>";
    echo "<strong>Current Year:</strong> " . $currentYear . " <em>(Integer)</em><br>";
    echo "<strong>Your Age:</strong> " . $age . " years old <em>(Integer)</em><br>";
    echo "<strong>Next Year Age:</strong> " . $nextYearAge . " <em>(Integer)</em><br>";
    echo "<strong>Born in the " . $decadeBorn . "s</strong> <em>(Integer)</em><br>";
    
    if($yearsUntil100 > 0){
        echo "<strong>Years until 100:</strong> " . $yearsUntil100 . " <em>(Integer)</em><br>";
    } else {
        echo "<strong>You are 100 or older!</strong> <em>(Boolean)</em><br>";
    }
    echo "</div>";
} else {
    echo "Please enter your birth year.";
}
?>