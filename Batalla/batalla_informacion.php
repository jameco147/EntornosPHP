<?php
$min = 32;
$max = 122;
$fmove = 16;
$input_string ="Una cosa es ser solidario, y otra es serlo a cambio de nada. Mariano Rajoy";
//$input_string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$input_length = strlen($input_string);

$input_array = [];

for ($i=0; $input_length > $i ; $i++) {
  $char = $input_string[$i];
  $char_val = ord($char);

  if ($char_val + $fmove > $max) {
    $a = $char_val + $fmove - $max;
    $result = $min - 1 + $a;

//el siguiente if es por si supera los 122 en la primera pasada.
    if ($result > $max) {
      $a = $result - $max;
      $result = $min - 1 + $a;
    }
    $input_array[] = $result;
  } else {
    $result = $char_val + $fmove;
    $input_array[] = $result;

  }

  $fmove = $result;

}

//esto muestra el código numérico ascii de cada caracter
$numbers = implode(",", $input_array);
echo $numbers . "<br><br>";

//esto muestra los caracteres que entregaremos al resto de compañeros
for ($i=0; $i < $input_length ; $i++) {
  $ascii=$input_array[$i];
  echo "<b>" . chr($ascii) . "</b>";

}
?>
