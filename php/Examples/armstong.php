<?php

error_reporting(0);

function asNum($input) {
 
  
    
//    if ($ans == $input){
//        echo "$input is an Armstrong Number";
//    }
//    else {
//        echo "Its not an Armstrong Number. Please Enter Different Number..";
//    }
//  
    
    $inputString = (string)$input;
    
        
   // echo "strlen of input =".strlen($inputString)." ";
    
    for ($i = 0; $i < strlen($inputString); $i++)
    { 
       // echo $input[$i]; 
        $rem=$input%10;  
        $input=$input/10; 
        $arr[$i] = $rem;
        $cubeInput =  $rem * $rem * $rem;
        $cubeArr[i] =$cubeInput;
//        echo $rem."\n";
       // echo $cubeInput." ";
        $newNum += $cubeArr[i];
        
        
    } 
   // echo "\n".$newNum." ";
    
    if($inputString == $newNum){
        echo $inputString. " is an Armstrong Number!!";
    }
    else{
        echo $inputString. " is not an Armstrong Number.";
    }
}

asNum(371);

?>
