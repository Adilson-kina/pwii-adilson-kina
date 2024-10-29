<?php
  $array = array(2, 5, 7, 8, 10, 18, 30, 37, 38, 60);
  foreach ($array as $elemento) {
    if ($elemento % 2 == 0) {
      echo "$elemento é par <br/>";
    }
    elseif ($elemento % 2 != 0) {
      echo "$elemento é impar <br/>";
    }
  }
?>
