<?php
session_start();

if(isset($_POST['grade'])) {
    $input = trim($_POST['grade']);
    
    if($input === "") {
        $output = "Please enter a grade letter.";
        echo $output;
        exit;
    }
    
    $grade = strtoupper($input);
    $validGrades = ["A", "B", "C", "D", "F"];
    
    if(!in_array($grade, $validGrades)) {
        $output = "Please enter a valid grade letter (A, B, C, D, F only).";
        echo $output;
        exit;
    }
    
    if(strlen($grade) !== 1) {
        $output = "Please enter only one letter.";
        echo $output;
        exit;
    }

    switch($grade) {
        case "A":
            $remark = "Excellent!";
            break;
        case "B":
            $remark = "Good job!";
            break;
        case "C":
            $remark = "Fair effort.";
            break;
        case "D":
            $remark = "Needs improvement.";
            break;
        case "F":
            $remark = "Failed. Please try again.";
            break;
    }
    
    $output = "Grade $grade: $remark";
    
    $_SESSION['conditional']['sample1'] = $output;
    echo $output;
}
?>