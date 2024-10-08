<?php
  $peso = 30;
  $altura = 1.60;
  $formula = $peso/($altura*$altura);

  switch($formula){
    case < 18.5: 
      echo "Magreza";
      break;
    case < 24.9: 
      echo "Normal";
      break;
    case < 29.9: 
      echo "Sobrepeso";
      break;
    case < 34.9: 
      echo "Obesidade Grau I";
      break;
    case < 39.9: 
      echo "Obesidade grau II";
      break;
    default:
      echo "Obesidade grau III";
      break;
  }
 
?>
