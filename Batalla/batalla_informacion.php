<?php

define("MIN",32);
define("MAX", 122);
$fmove = 16;

$input_string = "Una cosa es ser solidario, y otra es serlo a cambio de nada. Mariano Rajoy";
$input_length = strlen($input_string);
$input_array = [];
for ($i=0; $input_length > $i ; $i++) {
  $char = $input_string[$i];
  $char_val = ord($char);

  if ($char_val + $fmove > MAX) {
    $a = $char_val + $fmove - MAX;
    $result = MIN - 1 + $a;
  } else {
    $result = $char_val + $fmove;
  }

  if ($result > MAX) {
    $a = $result - MAX;
    $result = MIN - 1 + $a;
  }
  $input_array[] = $result;

  if ($result > MAX) {
    $a = $result - MAX;
    $result = MIN - 1 + $a;
  }
  $input_array[] = $result;
  $fmove = $result;
}

// Muestra el código numérico ascii de cada caracter
$numbers = implode(",", $input_array);
echo $numbers . "<br><br>";

// Esto muestra los caracteres que entregaremos al resto de compañeros
for ($i=0; $i < $input_length ; $i++) {
  $ascii = $input_array[$i];
  echo "<b>" . chr($ascii) . "</b>";
}

?>
