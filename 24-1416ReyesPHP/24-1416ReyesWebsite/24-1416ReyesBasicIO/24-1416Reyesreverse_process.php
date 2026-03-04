<?php
if(isset($_POST['reverse'])){
    $text = $_POST['reverse'];
    echo "Reversed: " . strrev($text);
}
?>