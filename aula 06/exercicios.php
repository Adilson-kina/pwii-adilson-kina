<?php
  $array = array(2, 5, 7, 8, 10, 18, 30, 37, 38, 60);
  foreach ($array as $index) {
    if ($index % 2 == 0) {
      echo "$index é par <br/>";
    }
    elseif ($index % 2 != 0) {
      echo "$index é impar <br/>";
    }
  }
?>
