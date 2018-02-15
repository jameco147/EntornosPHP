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
    print "charval: ".$char_val."<br>";
    print "fmove: ".$fmove."<br>";
    $result = $min - 1 + $a;
    print "=".$result." "."<br>";

//el siguiente if es por si supera los 122 en la primera pasada.
    if ($result > $max) {
      $a = $result - $max;
      print "charval: ".$char_val."<br>";
      print "fmove: ".$fmove."<br>";
      $result = $min - 1 + $a;
      print "=".$result." "."<br>";

    }
    $input_array[] = $result;
  } else {
    $result = $char_val + $fmove;
    $input_array[] = $result;
    print "charval: ".$char_val."<br>";
    print "fmove: ".$fmove."<br>";
    print "=";
    print $char_val + $fmove . "<br>";
  }
  print "charval: " . $char_val."<br>";
  $fmove = $result;
  print "fmove f: " . $fmove."<br><br>";
}
 //print_r($input_array);

$numbers = implode(",", $input_array);
echo $numbers . "<br>";

for ($i=0; $i < $input_length ; $i++) {
  $ascii=$input_array[$i];
  echo "<b>" . chr($ascii) . "</b>";

}




?>
