<?php
  $num = 6;

  if($num >= 4){
    echo $num, " é maior ou igual a 4 ";
  }

  $num1 = 3;
  $num2 = 4;

  $result = ($num1+$num2)%2;

  if ($result == 1){
    echo "</br>", $result, ", Quociente impar de novo";
  }
  else if($result == 0){
    echo "</br>", $result, ", Quociente par";
  }

?>
