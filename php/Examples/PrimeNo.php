<?php

  $num1 = 1;
 

 for($num2=$num1-1; $num2 > 0; $num2--){
      $ans = $num1 % $num2;
         
      if($ans==0 && $num2!=1){
          echo  "\n".$num1." is not a Prime Number";
          $num2=0;
      }
      elseif($ans==0 && $num2==1){
          echo "\n".$num1." is a Prime Number";
          
      }       
  }
    

?>
