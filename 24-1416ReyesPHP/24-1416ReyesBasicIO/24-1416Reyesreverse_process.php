<?php
header('Content-Type: text/plain; charset=utf-8');

if(isset($_POST['reverse'])) {
    $text = trim($_POST['reverse']);
    

    if(empty($text)) {
        echo "Error: Please enter some text.";
    }
    else if(strlen($text) > 1000) {
        echo "Error: Text is too long.";
    }
    else {
        echo "Reversed: " . htmlspecialchars(strrev($text), ENT_QUOTES, 'UTF-8');
    }
}
?>