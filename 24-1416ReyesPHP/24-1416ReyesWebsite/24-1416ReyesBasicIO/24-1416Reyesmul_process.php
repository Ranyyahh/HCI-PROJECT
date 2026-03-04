<?php
if(isset($_POST['mul1']) && isset($_POST['mul2'])){

    $mul1 = floatval($_POST['mul1']);
    $mul2 = floatval($_POST['mul2']);

    echo "Product: " . ($mul1 * $mul2);
}
?>