<?php
if(isset($_POST['weight']) && isset($_POST['height'])){

    $weight = floatval($_POST['weight']);
    $height_cm = floatval($_POST['height']);

    if($weight > 0 && $height_cm > 0){

        $height_m = $height_cm / 100;
        
        $bmi = $weight / ($height_m * $height_m);
        $bmi = number_format($bmi, 2);

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