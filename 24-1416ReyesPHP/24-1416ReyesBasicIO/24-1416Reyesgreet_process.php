<?php
header('Content-Type: text/plain; charset=utf-8');

if(isset($_POST['name'])) {
    $name = trim($_POST['name']);
    
    if(empty($name)) {
        echo "Error: Please enter your name.";
    }
    else if(strlen($name) > 100) {
        echo "Error: Name is too long.";
    }

    else if(preg_match('/\d/', $name)) {
        echo "Error: Please do not include numbers.";
    }
    else {
        $formattedName = ucwords(strtolower($name));
        echo "Hello, " . htmlspecialchars($formattedName, ENT_QUOTES, 'UTF-8') . "!";
    }
}
?>