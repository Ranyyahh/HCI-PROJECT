<?php
if(isset($_POST['reverse'])){
    $text = $_POST['reverse'];
    
    if(preg_match('/[0-9]/', $text)) {
        echo "Error: Please enter text only.";
    } else {
        echo "Reversed: " . strrev($text);
    }
}
?>