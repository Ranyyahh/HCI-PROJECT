<?php
if(isset($_POST['password'])){
    $enteredPassword = $_POST['password'];
    
    $correctPassword = "admin123";
    $adminPassword = "admin2026";
    $userPassword = "user123";
    
    $isCorrect = ($enteredPassword === $correctPassword);
    $isAdmin = ($enteredPassword === $adminPassword);
    $isUser = ($enteredPassword === $userPassword);
    $hasAccess = ($isCorrect || $isAdmin || $isUser);
    $isStrong = (strlen($enteredPassword) >= 8);
    
    echo "<div style='font-family: Arial, sans-serif;'>";
    echo "<strong>Entered Password:</strong> " . str_repeat("•", strlen($enteredPassword)) . " <em></em><br>";
    echo "<strong>Password Length:</strong> " . strlen($enteredPassword) . " characters <em></em><br>";
    echo "<strong>Correct Password?</strong> " . ($isCorrect ? "TRUE" : "FALSE") . " <em></em><br>";
    echo "<strong>Admin Access?</strong> " . ($isAdmin ? "TRUE" : "FALSE") . " <em></em><br>";
    echo "<strong>User Access?</strong> " . ($isUser ? "TRUE" : "FALSE") . " <em></em><br>";
    echo "<strong>Has Access?</strong> " . ($hasAccess ? "TRUE" : "FALSE") . " <em></em><br>";
    echo "<strong>Strong Password?</strong> " . ($isStrong ? "TRUE" : "FALSE") . " <em></em><br>";

    
    if($hasAccess){
        echo "<strong style='color: green;'>✓ ACCESS GRANTED</strong><br>";
    } else {
        echo "<strong style='color: red;'>✗ ACCESS DENIED</strong><br>";
    }
    echo "</div>";
} else {
    echo "Please enter a password.";
}
?>