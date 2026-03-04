<?php
if(isset($_POST['num1']) && isset($_POST['num2'])){

    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);

    echo "Sum: " . ($num1 + $num2);
}
?>