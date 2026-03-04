<?php
if(isset($_POST['userName'])){
    $name = htmlspecialchars($_POST['userName']);
    
    $nameLength = strlen($name);
    $upperName = strtoupper($name);
    $lowerName = strtolower($name);
    $wordCount = str_word_count($name);
    
    echo "<div style='font-family: Arial, sans-serif;'>";
    echo "<strong>Original Text:</strong> " . $name . " <em>(String)</em><br>";
    echo "<strong>Uppercase:</strong> " . $upperName . " <em>(String)</em><br>";
    echo "<strong>Lowercase:</strong> " . $lowerName . " <em>(String)</em><br>";
    echo "<strong>Number of Characters:</strong> " . $nameLength . " <em>(Integer)</em><br>";
    echo "<strong>Number of Words:</strong> " . $wordCount . " <em>(Integer)</em><br>";
    echo "</div>";
} else {
    echo "Please enter a name.";
}
?>