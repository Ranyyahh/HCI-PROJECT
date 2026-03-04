<?php
if(isset($_POST['weight']) && isset($_POST['height'])){

    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);

    if($weight > 0 && $height > 0){

        $bmi = $weight / ($height * $height);
        $bmi = number_format($bmi, 2);

        // Optional category
        if($bmi < 18.5){
            $category = "Underweight";
        }
        elseif($bmi < 25){
            $category = "Normal weight";
        }
        elseif($bmi < 30){
            $category = "Overweight";
        }
        else{
            $category = "Obese";
        }

        echo "BMI: " . $bmi . " (" . $category . ")";

    } else {
        echo "Please enter valid values.";
    }
}
?>