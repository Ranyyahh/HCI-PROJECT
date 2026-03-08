<?php
session_start();

if(isset($_POST['number'])){

    $num = $_POST['number'];
    $result = "";
    

    if(is_numeric($num)){
        
        $num = intval($num);
        

        if($num > 0){
            $sign = "POSITIVE";
            

            if($num % 2 == 0){
                $parity = "EVEN";
                if($num % 4 == 0){
                    $special = " (Divisible by 4)";
                } elseif($num % 6 == 0){
                    $special = " (Divisible by 6)";
                } else {
                    $special = "";
                }
                
            } else {
                $parity = "ODD";
                
                if($num % 5 == 0){
                    $special = " (Divisible by 5)";
                } elseif($num % 3 == 0){
                    $special = " (Divisible by 3)";
                } else {
                    $special = "";
                }
            }
            
            $result = "$num is $sign and $parity$special";
            
        } 

        elseif($num < 0){
            $sign = "NEGATIVE";

            if($num % 2 == 0){
                $parity = "EVEN";
            } else {
                $parity = "ODD";
            }
            
            $result = "$num is $sign and $parity";
        } 


        else {
            $result = "$num is ZERO (Neither even nor odd, neither positive nor negative)";
        }
        
    } else {
        $result = "INPUT ERROR! Please enter a valid number.";
    }

    $_SESSION['conditionals']['sample4'] =
        "$num - $result";

    echo $result;
}
?>