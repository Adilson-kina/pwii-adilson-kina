<?php
$valor1 = 100;
$valor2 = 6;
if($valor1>$valor2){
    for($i = $valor2 + 1; $i < $valor1; $i++){
        echo "${i} <br>";
    }
}
else if($valor2>$valor1){
    for($i = $valor1 + 1; $i < $valor2; $i++){
        echo "${i} <br>";
    }
}
else{
    echo "Não tem intervalo";
}
?>