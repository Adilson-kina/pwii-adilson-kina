<?php
  $peso = 90;
  $altura = 1.60;
  $formula = $peso/($altura*$altura);

  if ($formula<18.5) {
    echo "Magreza";
  }
  elseif ($formula > 18.5 and $formula < 24.9) {
    echo "Seu imc é Normal";
  }
  elseif ($formula > 25 and $formula > 29.9) {
    echo "Sobrepreso";
  }
  elseif ($formula > 30 and $formula > 34.9) {
    echo "Obesidade grau I";
  }
  elseif ($formula > 35 and $formula > 39.9) {
    echo "Obesidade grau II";
  }
  elseif ($formula >= 40) {
    echo "Obesidade grau III";
  }
?>
