<?php
if(isset($_POST['grade1']) && isset($_POST['grade2']) && isset($_POST['grade3'])){
    $grade1 = floatval($_POST['grade1']);
    $grade2 = floatval($_POST['grade2']);
    $grade3 = floatval($_POST['grade3']);
    
    $average = ($grade1 + $grade2 + $grade3) / 3;
    $total = $grade1 + $grade2 + $grade3;
    $roundedAverage = round($average, 0);
    $formattedAverage = number_format($average, 2);
    
    $isPassing = ($average >= 75);
    
    echo "<div style='font-family: Arial, sans-serif;'>";
    echo "<strong>Grade 1:</strong> " . number_format($grade1, 2) . " <em></em><br>";
    echo "<strong>Grade 2:</strong> " . number_format($grade2, 2) . " <em></em><br>";
    echo "<strong>Grade 3:</strong> " . number_format($grade3, 2) . " <em></em><br>";
    echo "<strong>Total:</strong> " . number_format($total, 2) . " <em></em><br>";
    echo "<strong>Average:</strong> " . $formattedAverage . " <em></em><br>";
    echo "<strong>Rounded Average:</strong> " . $roundedAverage . " <em></em><br>";
    echo "<strong>Status:</strong> " . ($isPassing ? "PASSING" : "FAILING") . " <em></em><br>";
    echo "</div>";
} else {
    echo "Please enter all three grades.";
}
?>