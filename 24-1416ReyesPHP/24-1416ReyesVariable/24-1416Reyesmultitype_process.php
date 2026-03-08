<?php
if(isset($_POST['studentName']) && isset($_POST['studentAge'])){

    $name = htmlspecialchars($_POST['studentName']);  
    $age = intval($_POST['studentAge']);               
    

    $nameUpper = strtoupper($name);
    $nameLength = strlen($name);
    
    $birthYear = date("Y") - $age;
    
    $canVote = ($age >= 18);
    
    echo "<div style='font-family: Arial, sans-serif; line-height: 1.8;'>";
    echo "Name: " . $name . "<br>";
    echo "Name (Uppercase): " . $nameUpper . "<br>";
    echo "Name Length: " . $nameLength . " characters<br>";
    echo "Age: " . $age . " years old<br>";
    echo "Birth Year (approx): " . $birthYear . "<br>";
    echo "Can Vote? " . ($canVote ? "YES" : "NO") . "<br>";
    echo "</div>";
    
} else {
    echo "Please enter both name and age.";
}
?>