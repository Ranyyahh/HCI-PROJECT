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
    echo "<strong>Birth Year:</strong> " . $birthYear . " <br>";
    echo "<strong>Current Year:</strong> " . $currentYear . " <br>";
    echo "<strong>Your Age:</strong> " . $age . " years old<br>";
    echo "<strong>Next Year Age:</strong> " . $nextYearAge . " <br>";
    echo "<strong>Born in the " . $decadeBorn . "s</strong><br>";
    
    if($yearsUntil100 > 0){
        echo "<strong>Years until 100:</strong> " . $yearsUntil100 . " <br>";
    } else {
        echo "<strong>You are 100 or older!</strong> <br>";
    }
    echo "</div>";
} else {
    echo "Please enter your birth year.";
}
?>